<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include("admin.admincss")
  </head>
  <body>
       
        <div style= "display: flex; background-color: #2d2f34; justify-content: center; align-items: flex-start; width: 100%;">
                    @include("admin.adminnavbar")
                    <table bgcolor="grey" style="background-color: #191c24; margin-top: 10px; width: 95%;" border="3px"  width = "100%">
                        <tr style="background: #5b1e99;">
                            <th style="padding: 20px">Name</th>
                            <th style="">Email</th>
                            <th style="text-align: center;">Action</th>
                         </tr>
                     
                        @foreach($data as $data1)
                        <tr text-align="center">
                        <td style="padding: 20px 20px; color: white;">{{$data1->name}}</td>
                        <td style = "color:white;">{{$data1->email}}</td>
                      @if($data1->usertype=="0")
                      <form method = "post" action = "{{url('userdelete',$data1->id)}}">
                       @csrf
                        @method('delete')
                        <td style="display: flex; justify-content: center;"><button type="submit" ><a style = "background: #9e253c; color: white; display: flex; width: 100px; padding: 8px 20px;border-radius: 5px;
                          justify-content: center;text-decoration: none">delete</button></td>
                         @else       
                       <td style = "text-align: center;"><a style = " background: #5d516a; color: white; width: 20%; padding:8px 15px; border-radius: 3px; text-decoration: none;"href = "">Not allowed</a></td>     
                    @endif
                   </form>
                 </tr>
               @endforeach
             </table>
            
          </div>
        </div>
       @include("admin.adminscript")
       {{$data->links() }}
  </body>
</html>