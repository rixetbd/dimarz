<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1; url={{url('/')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanks - {{$data['invitee_full_name']}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"/>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
        body{
            font-family: 'Poppins', sans-serif;
        }
        .message{
            font-size: 50px;
            font-weight: 700;
            font-family: 'Kalam', cursive;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 90vh;">
            <div class="col-sm-12 col-md-8 text-center">
                <div class="message">
                    Thanks, {{$data['invitee_full_name']}}
                </div>
                <p>We will contact with you as soon as posible into</p>
                <a href="{{url('/')}}" class="btn btn-sm btn-secondary"><i class="fas fa-long-arrow-alt-left"></i> Back To Home</a>

                {{--
                {{$data['assigned_to']}}
                {{$data['event_type_uuid']}}
                {{$data['event_type_name']}}
                {{$data['event_start_time']}}
                {{$data['event_end_time']}}
                {{$data['invitee_full_name']}}
                {{$data['invitee_email']}}
                {{$data['answer_1']}}

                {{$data['invitee_full_name']}} Full Name
                {{$data['invitee_email']}} Email
                {{$data['answer_1']}} Phone
                {{$data['answer_2']}} Company Name
                {{$data['answer_3']}} Website
                {{$data['answer_4']}} Service Name
                {{$data['event_start_time']}} Start Time
                {{$data['event_end_time']}} End Time
                {{$data['event_type_name']}} Consultation Type
                {{$data['answer_5']}} Message
                {{$data['assigned_to']}} Assigned To


{{$data['event_type_uuid']}} event_type_uuid
{{$data['invitee_uuid']}} invitee_uuid
                    --}}
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
