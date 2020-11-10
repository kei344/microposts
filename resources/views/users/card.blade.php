<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
        <img class="rounded img-fluid" width="500" height="500" alt="">
    </div>
</div>
@include('user_follow.follow_button', ['user' => $user])