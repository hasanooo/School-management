@extends('Backend.Teacher.teacherDashboard')
@section('content1')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<title></title>



</head>
<body>
   
        
	<div class="row">
        
	<div class="col-md-3">
		<select name="session" id="sections" class="form-select" aria-label="Default select example">
                        <option selected>Open this for select session</option>
                        @foreach ($ss as $sss)
                        <option value={{$sss->session_name}}>{{$sss->session_name}}</option>
                        
                        @endforeach
                    </select>
	</div>

                <div class="col-md-3">
                    <select name="class" id="class_name" class="form-select" aria-label="Default select example">
                        <option selected>Open this for select class</option>
                       @foreach ($d as $h)
                        <option value={{$h->class_name}}>{{$h->class_name}}</option>
                        
                        @endforeach
                    </select>
                </div>
                
                <div class="col-md-3">
                    <select name="subject" id="subject" class="form-select" aria-label="Default select example">
                        <option selected>Open this for select subject</option>
                         @foreach ($v as $vf)
                        <option value={{$vf->sub_name}}>{{$vf->sub_name}}</option>
                        
                        @endforeach
                    </select>
                
            </div>

           <div class="col-md-3">
           
            <input  type="submit" id="search" value="Filter Mark" class="btn btn-success"/>
        </div>
          
        </div>
        <br>
        <br>
        <div class="table-data"></div>

        
        
        <script>
        $(document).ready(function() {
            $(document).on('click', '#search', function() {
                var s = $('#sections').val();
                 var q = $('#class_name').val();
                 var r = $('#subject').val();

                 $.ajax({
           
                    url: "{{route('get_marks')}}",
                    method: 'GET',
                    data: {
                        s: s,
                        q: q,
                        r: r
                    },

                    success: function(res) {
                         
                         $('.table-data').html(res);
                        /* $('#total_records').text(data.total_data); */
                    }
                })

            });

            




           
         



        });
        </script>
        
       
     
   
</body>

</html>
@endsection