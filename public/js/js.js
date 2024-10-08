function Validator(formSelector){
    var _this=this;

    var formRules={};
    //gắn giá trị mặc định cho tham số (ES5)
    function getParent(element,selector){
            while(element.parentElement){
                if(element.parentElement.matches(selector)){
                    return element.parentElement
                }else{
                    element=element.parentElement
                }

            }
    }

   
    /**
     * quy ước tạo rule
     * -nếu có lỗi thì return `errorMessage`;
     * -nếu không có lỗi return `Undefined`
     */
    var validatorRules={
            require:function (value){
                return value ? undefined : 'vui lòng nhập trường này'
            },
            email:function (value){
              var regex=/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                return regex.test(value) ? undefined : 'vui lòng nhập email'
            },
            min:function (min){
                return function(value){
                    return value.length >= min ? undefined : `vui lòng nhập ít nhất ${min} ký tự`
                }
            },
            max:function (max){
                return function(value){
                    return value.length >=max ? undefined : `vui lòng nhập ít nhất ${max} ký tự`
                }
            },

    };


    //lấy ra form element trong Dom thep(formSelecter)
    var formElement=document.querySelector(formSelector);
   if(formElement){
           //lấy tất cả phần tử có name và rule
            var inputs =formElement.querySelectorAll('[name][rule]')

            for(var input of inputs){
                //tác dấu gạch | thàng một mảng ["value1","value2"]
                var rules=input.getAttribute('rule').split('|');
                for(var rule of rules ){


                    var ruleInfo
                    var isRuleHasValue=rule.includes(':');

                //tác dấu gạch : thàng một mảng ["value1","value2"]
                    if(isRuleHasValue){
                        ruleInfo=rule.split(':');
                        rule=ruleInfo[0];

                
                    }

                    var ruleFnc=validatorRules[rule];
                    if(isRuleHasValue){
                        ruleFnc=ruleFnc(ruleInfo[1])
                    }


                    if(Array.isArray(formRules[input.name])){
                        formRules[input.name].push(ruleFnc);

                    }else{
                        formRules[input.name]=[ruleFnc];
                    }
                }

                //lắng nghe sự kiện để validate (blur,change)
                input.onblur=handleValidate;
                input.oninput=handleClearError;

            }
            //hàm thực hiện validate
            function handleValidate(event){
              var rules=formRules[event.target.name];
              var errorMessage

            for(var rule of rules){
                errorMessage= rule(event.target.value);
                 if( errorMessage)break;
            }
               
              

             if(errorMessage){
               var formGroup=getParent(event.target,'.form-group');
              if(formGroup){
                formGroup.classList.add('invalid')
                var formMessage=formGroup.querySelector('.form-message');
                if(formElement){
                    formMessage.innerText=errorMessage;
                }
              }

             }
             return !errorMessage;

            }

            //hàm clear error list

            function handleClearError(event){

            var formGroup=getParent(event.target,'.form-group');
             if(formGroup.classList.contains('invalid')){
                formGroup.classList.remove('invalid')

                var formMessage=formGroup.querySelector('.form-message');
                if(formElement){
                    formMessage.innerText='';
                }

             }       
            }
        //    console.log(formRules);

   }
   console.log(this);

   //xử lý hành vi submit form khi nhấn submit thì hiển thị thông tin qua consolog
   formElement.onsubmit=function (event){

    //ngăn hành vi mặc định chuyển trang
        event.preventDefault();

       


        var inputs =formElement.querySelectorAll('[name][rule]');
        var isValid=true;

        for(var input of inputs){
           if(!handleValidate({target:input})){
            isValid=false;
           }
        }

       //khi không có lỗi thì submit form
       if(isValid){
       
            if(typeof _this.onSubmit === 'function'){

                var EnableInput=formElement.querySelectorAll('[name]');
                var formValue=Array.from(EnableInput).reduce(function(values,input){
                      //kiểm tra giới tính hoặc checkbox
                      switch(input.type){
                        case'radio':                
                              values[input.name]=formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                              break;
                        case'checkbox':
                        if(!input.matches(':checked')){
                          values[input.name]='';
                          return values;
                        }
    
                          if(!Array.isArray(values[input.name]) ){
                              values[input.name]=[];
                          }
                          values[input.name].push(input.value)
    
                        break;
    
                        case 'file':
                          values[input.name]=input.files;
    
                        break;
                        default:
                        values[input.name]=input.value
                      }
    
                      return  values;
    
                },{})
                ///gọi lại hàm  formSubmit và trả về giá trị của form 
                _this.onSubmit(formValue);
            }else{

                formElement.submit();
            }

            
        
       }
   }

}