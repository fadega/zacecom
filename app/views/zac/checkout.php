<?php
 
    $this->view("zac/header",$data);

   if (isset($_SESSION['CART_ITEMS']) && $_SESSION['CART_ITEMS'] !="" ) {
      
    $items = $_SESSION['CART_ITEMS'];
    // echo "all items above this<br/>";
    $price = [];
    $product=[];
    $unitprice=[];
    $quantity=[];
    // $quantity = 0;
    $total =0;
    for($i=0; $i < count($items); $i++){
        $price[$i]= $i;
        $product[$i] =$i;
        $unitprice[$i] =$i;
        $quantity[$i]=$i;
    }
   
     for ($count = 0; $count < count($items); $count++) {
               $price[$count] += $items[$count]['cart_qty'] * $items[$count]['price'];
               $product[$count] = $items[$count]['name'];
               $unitprice[$count] = $items[$count]['price'];
               

       }  
          
 
    //name and price for each
    $cart_items = array_combine($product,$price);

    //make name and pice of all stuff on cart accessible everywhere

    $_SESSION['checkout'] = $cart_items;

    foreach($cart_items as $name => $price){
        // echo $name;
    }

    // echo "name and total of each item  <br />";
    // show($cart_items); //name and price

    //quantity for each item in cart
    $j=0;
    foreach($items as $key => $item){
        $quantity[$j] = $item['cart_qty'];
        $j++;
    }

    // echo "quantity of each <br />";
   // show($quantity);//quantity


    // echo "Combined price and quantity<br />";
    $combined = array_combine($quantity,$cart_items);
    // show($combined);

    $name_qty_price = [];
    foreach($cart_items as $name =>$tatolPrice){
        foreach($combined as $items){
            $name_qty_price[$name] = $items;
        }
    }

    // echo "Name qty  price  saaga<br />";
    // show($name_qty_price);
   
          
   }

?>


<div class="container" style="max-width: 1000px;">
    <!-- if items in cart show checkout form if not -->
  <?php if(isset($_SESSION['CART_ITEMS']) && $_SESSION['CART_ITEMS'] !="" && count($cart_items)>0):?>
   
    <div class="py-5 text-center">
        
        <h2>Checkout Details</h2>
        <p class="lead">Fill the form to proceed with checkout.</p>
    </div>
    <div class="row">
        <div class="col-md-6 order-md-2 mb-4">
       
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">On your cart</span>
               
            </h4>
            <ul class="list-group mb-3 sticky-top">
            
            <?php foreach($cart_items as $name=> $price):?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  
                    <div>
                        <h6 class="my-2"><?=$name?></h6>
                        <small class="text-muted">Standard price</small>
                    </div>
                    <span class="text-muted">$<?=$price?></span>
                 
                </li>
        
                <?php endforeach;?>
               
            
              
                <li class="list-group-item d-flex justify-content-between">
                    <?php if(isset($_SESSION['total']) && $_SESSION['total'] != "" ):?>
                    <span>Total (USD)</span>
                    <div class="d-flex flex-end" style="margin-right:-20px;">
                      <span class="fw-bold">$</span>
                      <input type="text" id="amount" class="border border-0 fw-bold " style="width:70px;" readonly aria-readonly="amount" value="<?=$_SESSION['total']?>"/>

                    </div>
                   
                    <?php endif; ?>
                </li> 
            </ul>
         
        </div>
        <div class="col-md-6 order-md-1">
            <h4 class="mb-3">Billing Details</h4>
            <!-- <form method = "post" class="needs-validation ">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control border border-bottom-3" name="name" id="firstName" placeholder="First name" value="" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control border border-bottom-3" name="lastname" id="lastName" placeholder="Last name" value="" required="">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
               
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input type="email" name="email" class="form-control border border-bottom-3" id="email" placeholder="you@somedomain.com" required>
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control border border-bottom-3" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
               
              
                <!-- <hr class="mb-4"> -->
                <!-- <button class="btn btn-primary btn-lg btn-block" style="background-color:#06d6a0;" type="submit">Make Payment</button> -->
                <!--div id="paypal-payment-button" onclick="validate(event)"></div>
            </form> -->
            <div id="paypal-payment-button" onclick="validate(event)"></div>
        </div>
    </div>
    <?php else:?>
        <div class="text-center">
            <h5 class="text-danger" style="margin:100px 0px;">Shame! Add merch to cart before checkout</h5>
            
        </div>
    <?php endif;?>
 
</div>
<script src="https://www.paypal.com/sdk/js?client-id=AeUfBeYkYS_nH4-K4XWhfSMvbEKoOdmWSQ6_fh0Ml0Ya0s8sW-lhAthUA9z0K1V_TGtZNdxJedCMNxG_&disable-funding=credit,card"></script>
<!-- <script>paypal.Buttons().render('#paypal-payment-button');</script> -->


<script>

function validate(e){
    let name = document.querySelector('#name').value.trim();
    if(name == "" && !isNaN(name)){
      alert("invalid name");
      return;
    }

}
var total=0;
 let amount  = document.querySelector("#amount").value.trim();
if(amount != "" && !isNaN(amount)){
    total = amount;
    console.log(total);
}

txn_details = {};
paypal.Buttons({
    style : {
        color: 'gold'
        // shape: 'pill'
    },
    createOrder: function (data, actions) {
        
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: total
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            txn_details = details
            // console.log(txn_details)
            <?php //unset($_SESSION['CART']); ?>
            
            window.location.replace("<?=ROOT?>success")
            handle_results(txn_details);
            
        })
        
    },
    onCancel: function (data) {
        window.location.replace("<?=ROOT?>failed")
    }
}).render('#paypal-payment-button');

function handle_results(results){
    // console.log("These are keys")
    // console.log(results)
    // console.log(Object.keys(results))

    // console.log("These are values")
    //   console.log(Object.values(results))

    // for(const key of Object.keys(results)){
    //     console.log(`${key} => ${results[key]}`)
    // }

    // //USING ENTRIES
    // console.log(Object.entries(results)); //produces arrays

    // //loop using entry
    // for(const entry of Object.entries(results)){
    //     console.log(`${entry[0]}=>${entry[1]}`)
    // }

    // console.log(results);
    let txnInfo = [];

    const isObject = function(val){
        if(val === null){
            return false;
        }
        return (typeof val === 'object')
    };

    const objProps = function(obj){
        for (let val in obj){
            if(isObject(obj[val])){
                objProps(obj[val]);
            }else{
                // console.log(val, obj[val])
                txnInfo.push(`${val} => ${obj[val]}`);
            }
    }


    }
    objProps(results)
    console.log(txnInfo);
    
 
  let data = [];
 let keyentries = ['id', 'full_name','currency_code','value','full_name','status','email_address','create_time' ]

    // for(const key of Object.keys(txnInfo)){
    //     if(key === key in keyentries){
    //         data[key] = txnInfo[key];
    //         // data.push(`${key}`, `${txnInfo[key]}`)
    //     }

    // }
    console.log("zegedsssss")

    for (const [key, value] of Object.entries(txnInfo)) {
             if(key in keyentries){
                 data[key] = `${txnInfo[key]}`;
             }
            
            }


    console.log(data);
     


}
/*
this is txnInfo

0: "id => 5LB6878092149254T"
​
1: "intent => CAPTURE"
​
2: "status => COMPLETED"
​
3: "reference_id => default"
​
4: "currency_code => USD"
​
5: "value => 21.89"
​
6: "email_address => afa@business.example.com"
​
7: "merchant_id => AKE947Q3R5K86"
​
8: "full_name => Habtat Zerezghi"
​
9: "address_line_1 => 1 Cheeseman Ave Brighton East"
​
10: "admin_area_2 => Melbourne"
​
11: "admin_area_1 => Victoria"
​
12: "postal_code => 3001"
​
13: "country_code => AU"
​
14: "id => 1H437226MJ1369422"
​
15: "status => COMPLETED"
​
16: "currency_code => USD"
​
17: "value => 21.89"
​
18: "final_capture => true"
​
19: "status => ELIGIBLE"
​
20: "0 => ITEM_NOT_RECEIVED"
​
21: "1 => UNAUTHORIZED_TRANSACTION"
​
22: "create_time => 2021-09-30T16:07:14Z"
​
23: "update_time => 2021-09-30T16:07:14Z"
​
24: "given_name => Habtat"
​
25: "surname => Zerezghi"
​
26: "email_address => habtat@personal.example.com"
​
27: "payer_id => JW99MTEPFWFWE"
​
28: "country_code => AU"
​
29: "create_time => 2021-09-30T16:07:00Z"
​
30: "update_time => 2021-09-30T16:07:14Z"

*/



</script>


<!-- checkout ends here -->



<?php
 
   $this->view("zac/footer",$data);
 
?>