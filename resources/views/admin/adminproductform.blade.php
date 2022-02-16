<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include("admin.admincss")
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
 
   
       <div class="container-scroller" style = "background-color: #2d2f34;">
            @include("admin.adminnavbar")
            <div style = "width:100%; text-align:center; padding:20px 40px;background: repeating-linear-gradient(
                                                                              45deg, black, transparent 100px);">
                <form action = "{{url('AddProducts')}}" method="Post" enctype = "multipart/form-data">
                @csrf
                <fieldset>

                   <h3 class="text-xl font-medium text-gray-900 dark:text-white " style = "color: whitesmoke;">Add a product</h3>
                 <div>
                     <select style = "color:gray;" id="producttype" name="producttype" style = "padding: 10px;">
                            <option style = "color:gray;" value="cd" name = "cd">CD</option>
                             <option style = "color:gray;" value="game" name = "game">Games</option>
                            <option value="books"name ="books">Book</option>
                    </select> 
                    <div>
                     <div>
                     <label style = "font-size: 24px; padding:20px 5px;"> </label>
                     <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "title" placeholder = "write a title" required>
                     </div>
                      <div>
                     <label style = "font-size: 24px; padding:20px 5px;"> </label>
                     <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "name" placeholder = "write a title" required>
                     </div>
                     <div>
                     <label style = "font-size: 24px; padding:20px 5px;"> </label>
                     <input style = "color: blue;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "price" placeholder = "Price" required>
                     </div>
                     <div style="width: 110%;">
                     <label style = "font-size: 24px; padding:20px 5px;"> </label>
                     <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;color:#b51f1f;" type = "file"  name = "image" placeholder = "Image" required>
                     </div>
                     <label style = "font-size: 24px; padding:20px 5px;"></label>
                     <input style = "color: blue;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "pages" placeholder = "pages" required>
                     </div>
                     <label style = "font-size: 24px; padding:20px 5px; top:20px;"></label>
                     <textarea name= "description" placeholder= "Description" rows="4" cols="20" style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%; margin:20px;">
                      
                     </textarea>
                     
                     {{-- <label>Description</label>
                     <input style = "color: blue;" type = "text"  name = "description" placeholder = "Description" required>
                     </div> --}}
                     <div>
                     
                     <input style = "color: white; border-radius: 10px; background-color:#5c1f99; width:31%;font-size: 30px;margin-left: 41px; " type = "submit" value="Submit">
                     </div>
                     </fieldset>
                      
                </form>
       </div>
            </div>
            <div class="container-scroller" style = "background-color: #2d2f34;">
             
                  <div style= "display: flex; background-color: #2d2f34; justify-content: center; align-items: flex-start; width: 100%;">
            <table bgcolor="grey" style="background-color: #191c24; margin-top: 10px; width: 95%;" border="3px"  width = "100%">
                <tr style="background: #5b1e99;">
                <th style="padding: 20px">Producttype</th>
                    <th style="padding: 20px">Title</th>
                    <th style="">name</th>
                    <th style="">price</th>
                    <th style="">page</th>
                    <th style="">description</th>
                    <th style="">Image</th>
                    <th style="text-align: center;">Action</th>
                </tr>
                
                @foreach($products as $product1)
                <tr text-align="center">
                <td style="padding: 20px 20px;color:white;">{{$product1->producttype}}</td>
                <td style="padding: 20px 20px;color:white;">{{$product1->title}}</td>
                 <td style="padding: 20px 20px;color:white;">{{$product1->name}}</td>
                <td style= "color:white">${{$product1->price}}</td>
                <td style= "color:white">{{$product1->page}}</td>
                <td style= "color:white">{{$product1->description}}</td>
                <td ><img height = "150" width = "150" margin = "12"src = "{{$product1->image}}"></td>
               

                <form method = "post" action = "{{url('productdelete', $product1->id)}}">
                @csrf
                 @method('delete')
          
                <td style="display: flex; justify-content: center;"><a style = "background: #9e253c; color: white; display: flex; width: 100px; padding: 8px 20px;border-radius: 5px;
                 justify-content: center;text-decoration: none;margin: 12px;"><button type="submit" >Delete</button></a></td>
                </form>
  
                <td style="display: flex; justify-content: center;"><a href = "{{url('Productupdateview', $product1->id)}}"style = "background: green; color: white; display: flex; width: 100px; padding: 8px 20px;border-radius: 5px;
                justify-content: center;text-decoration: none;"><button type="submit" >update</button></a></td>
                
                </tr>
                @endforeach
            </table>
            
        </div>
        </div> 
         
       @include("admin.adminscript")
        {{$products->links() }} 
  </body>
</html>