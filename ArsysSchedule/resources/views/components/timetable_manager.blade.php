<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIMETABLE MANAGER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                       
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Uniqueid</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                                <tr>
                
                                @foreach ($timetable_manager as $item)
                                    <td class="text-center">
                                     {{$item->external_uid}}
                                    </td>
                                    <td class="text-center">
                                     {{$item->uniqueid}}
                                    </td>
                                    <td class="text-center">
                                     {{$item->first_name}}
                                    </td>
                                    <td class="text-center">
                                     {{$item->email_address}}
                                    </td>
                                    
                                    
                
                                  </div>
                              @endforeach
                            </tbody>
                          </table>  
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    

</body>
</html>