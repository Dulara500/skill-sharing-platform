<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/usernavbarcss.css') }}">
    <title>SkillSwap – Learn & Teach Together</title>
    <style>
        .menu-links a.inbox {
            color: black;
            border-bottom: 2px solid #d33;
            padding-bottom: 4px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }




    </style>
</head>
<body>
    @include('user.usernavbar')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3 my-3">
                <div class="card p-4">
                    <a href="?page=messages" class="{{ request('page') == 'messages' ? 'text-primary' : '' }}" >Messages</a>
                    <hr>
                    <a href="?page=notification" class="{{ request('page') == 'notification' ? 'text-primary' : '' }}">Notifications</a>
                </div>
          </div>
          <div class="col-lg-9">
                @if (request('page') == 'notification')
                    @include('user.messageSection.notification')
                @else
                    @include('user.messageSection.message')
                @endif
           </div>
        </div>
    </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


