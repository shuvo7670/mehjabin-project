               <div class="col-lg-8 col-md-12">
                  <table class="table">
                       <thead>
                         <tr>
                           <th scope="col">Name</th>
                           <th scope="col">Unit Price</th>
                           <th scope="col">Quantity</th>
                           <th scope="col">Total</th>
                           <th scope="col">Action</th>
                         </tr>
                       </thead>
                       <tbody>
                        @foreach($carts as $cart)
                         <tr>
                           <th>{{$cart->name}}</th>
                           <td>{{$cart->price}}</td>
                           <td>
                              <select class="d-block form-control" id="qty-{{$cart->rowId}}" onchange="cartUpdate('{{$cart->rowId}}')">
                                 @for ($i = 0; $i < 15; $i++)
                                     <option value="{{$i}}" <?php if($i == $cart->qty) echo "selected" ?>>{{$i}}</option>
                                 @endfor
                              </select>
                           </td>
                           <td>{{$cart->price*$cart->qty}}</td>
                           <td> <button class="btn bg-custom" onclick="cartRemove('{{$cart->rowId}}')">Remove</button></td>
                         </tr>
                         @endforeach
                       </tbody>
                     </table>
               </div>
               <div class="col-lg-4 col-md-12">
                  <div class="cart-totals">
                     <h3>Payment Info</h3>
                     <ul>
                        <li>Subtotal <span>{{$cartSubTotal}}  ৳</span></li>
                        <li>Shipping <span>Free</span></li>
                        <li>Total <span>{{$cartSubTotal}}  ৳</span></li>
                        <li>Payable Total <span>{{$cartSubTotal}}  ৳</span></li>
                     </ul>
                     <a href="{{route('pages.checkout')}}" class="default-btn">
                     Proceed to Checkout
                     <span></span>
                     </a>
                  </div>
               </div>