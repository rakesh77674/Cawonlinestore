<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href = "/public">
    <!-- Required meta tags -->
   @include("admin.admincss")
  </head>
  <body> 
    <div class="container-scroller" style = "background-color: #2d2f34;">
        @include("admin.adminnavbar")
        <div style = "width:100%; text-align:center; padding:20px 40px;background: repeating-linear-gradient(
                                                                          45deg, black, transparent 100px);">
            <form action = "{{url('Productupdate', $products->id)}}" method="Post" enctype = "multipart/form-data">
            @csrf
            @method('put')
            <fieldset>

               <h3 class="text-xl font-medium text-gray-900 dark:text-white " style = "color: whitesmoke;">Add a product</h3>
             <div>
                 <select style = "color:gray;" id="producttype" name="producttype"  value = "{{$products->producttype}}"style = "padding: 10px;">
                    
                        <option style = "color:gray;" value="cd" name = "cd">CD</option>
                         <option style = "color:gray;" value="game" name = "game">Games</option>
                        <option value="books"name ="books">Book</option>
                </select> 
                <div>
                 <div>
                 <label style = "font-size: 24px; padding:20px 5px;"> </label>
                 <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "title" value = "{{$products->title}}" placeholder = "write a title" required>
                 </div>
                  <div>
                 <label style = "font-size: 24px; padding:20px 5px;"> </label>
                 <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%; " type = "text"  name = "name" value = "{{$products->name}}"placeholder = "write a title" required>
                 </div>
                 <div>
                 <label style = "font-size: 24px; padding:20px 5px;"> </label>
                 <input style = "color: blue;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "price" value = "{{$products->price}}"placeholder = "Price" required>
                 </div>
                 <div style="width: 110%;">
                 <label style = "font-size: 24px; padding:20px 5px;"> </label>
                 <img style = "height: 150px;padding: 20px 20px;margin-left: 496px; text-align: center;" src = "{{$products->image}}">
                 </div>
                 <div style="width: 110%;">
                    <label style = "font-size: 24px; padding:20px 5px;"> </label>
                    <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;color:#b51f1f;" type = "file"  name = "image" placeholder = "Image" required>
                 </div>
                 <label style = "font-size: 24px; padding:20px 5px;"></label>
                 <input style = "color: blue;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "pages" value = "{{$products->pages}}" placeholder = "pages" required>
                 </div>
                 <label style = "font-size: 24px; padding:20px 5px; top:20px;"></label>
                 <textarea name= "description" placeholder= "Description" rows="4" cols="20" style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%; margin:20px;">
                  {{$products->description}}
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

   {{-- <div class="container-scroller" style = "background-color: #2d2f34;">
            @include("admin.adminnavbar")
            <div style = "width:100%; text-align:center; padding:20px 40px;">
                <form action = "{{url('updateproduct', $products->id)}}" method="post" enctype = "multipart/form-data">
                @csrf
                <fieldset>
                    <div>
                        <label style = "font-size: 24px; padding:20px 5px;"> </label>
                        <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "producttype" value = "{{$products->Producttype}}" required>
                    </div>
                     <div>
                        <label style = "font-size: 24px; padding:20px 5px;"> </label>
                        <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "name" value = "{{$products->name}}" required>
                    </div>
                        <label style = "font-size: 24px; padding:20px 5px;"> </label>
                        <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "price" value = "{{$products->prce}}" required>
                     </div>
                     
                     <div style="width: 110%;">
                        <label style = "font-size: 24px; padding:20px 5px;"> </label>
                         <img style = "height: 150px;padding: 20px 20px;margin-left: 600px; text-align: center;" src = "productimage/{{$products->image}}">
                     </div>
                     <div style="width: 110%;">
                        <label style = "font-size: 24px; padding:20px 5px;"> </label>
                        <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;color:#b51f1f;" type = "file"  name = "image" placeholder = "Image" required>
                     </div>
                     <div>
                        <label style = "font-size: 24px; padding:20px 5px;"> </label>
                        <input style = "color: blue;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "pages" value = "{{$products->pages}}" required>
                     </div>
                     <div>
                        <label style = "font-size: 24px; padding:20px 5px;"> </label>
                        <input style = "color: blue;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "description" value = "{{$products->description}}" required>
                     </div>
                     <div style="width:96%">
                     <div>
            
                     <input style = "color: white; border-radius: 10px; background-color:#5c1f99; width:25%;font-size: 30px;margin-left: 131px; " type = "submit" value="Submit">
                     </div>
                     </fieldset>
                </form>
       </div>
            </div>
       @include("admin.adminscript") --}}
  </body>
</html>