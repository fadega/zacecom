
        //PROMISES ================ down =============
        let pro = new Promise((resolve,reject)=>{
            let a = 1+1;
            if(a == 2){
                resolve("Pass data as success")
            }else{
                reject("Pass Message = no data")
            }
        })

        //HOW TO INTERACT WITH A PROMISE,
        pro.then((message)=>{
          // console.log("This is from resolve : "+message)
        }).catch((message)=>{
           // console.log("This is from reject : "+message)
        })
        //================ up ward =============
        

        //CALL BACK FUNCTION ==================down========
        const userLeft = true
        const userWatchingCatMeme = false 

        function watchTutorialCallback(callback,errorCallback){
            if(userLeft){
                errorCallback({
                    name:'User Left',
                    message:':('
                })
            }else if(userWatchingCatMeme){
                errorCallback({
                    name:"user watching cat meme",
                    message: "web Dev Simplified < Cat"
                })
            }else{
                callback("Thumbs up and subscribe")
            }
        }

        watchTutorialCallback((message)=>{
           // console.log('success :'+message)
        },(error)=>{
           // console.log(error.name + ' '+error.message)
        })




        //Above function converted to promise
        
        function  watchPromise(){
            return new Promise((resolve, reject)=>{
                if(userLeft){
                    reject({
                    name:'User Left - from promise',
                    message:':('
                })
            }else if(userWatchingCatMeme){
                reject({
                    name:"user watching cat meme - from promise",
                    message: "web Dev Simplified < Cat"
                })
            }else{
                resolve("Thumbs up and subscribe -from promise")
            }

            })
          
        }
         //interact with the promise
        watchPromise().then((message)=>{
           // console.log("Success from resolve: " +  + message.name +' '+message.message)

        }).catch((message)=>{
          //  console.log("Failure from reject: " + message.name +' '+message.message)
        })
        // =================== up  ===================


        
        function makeRequest(location){
            return new Promise((resolve, reject)=>{
                console.log(`Making Request too ${location}`)
                if(location ==='Google'){
                    resolve('Google says hit')
                }else{
                    console.log('We can only talk to Google')
                }
            })
        }

        function processRequest(response){
            return new Promise((resolve, reject)=>{
                console.log('Processing response ')
                resolve(`Extra Information + ${response}`)
            })
        }

        //without async and await
        makeRequest('Google').then(response=>{
            console.log('Response received')
            return processRequest(response)
        }).then(processedResponse =>{
            console.log(processedResponse)
        })




//with async and await
       async function passdata(){
          const response = await makeRequest('Google')
          console.log('Response received')
          const processedResponse = await processRequest(response)
          console.log(processedResponse)

        }
        passdata();









        customerdetails['name']      = final["full_name"]
        customerdetails["email"]     = final["email_address"]
        customerdetails["address1"]  = final["address_line_1"]
        customerdetails["state"]     = final["admin_area_1"]
        customerdetails["city"]      = final["admin_area_2"]
        customerdetails["country"]   = final['country_code'];
        customerdetails["payerid"]   = final["payer_id"]


        orderdetails["txnid"]        = final['id'];
        orderdetails["amount"]       = final['value'];
        orderdetails["payerid"]      = final['payer_id'];
        orderdetails["createtime"]   = final['create_time'];
        orderdetails["country"]      = final['country_code'];
        orderdetails["currency"]     = final['currency_code'];
        orderdetails["status"]       = final['final_capture'];
        orderdetails["location"]     = final['admin_area_2'];

        console.log("customerdetails")
        console.log(customerdetails)
        console.log("orderdetails")
        console.log(orderdetails)