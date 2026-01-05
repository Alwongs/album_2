<li class="user-list-item">
    <h2 class="user-list-item__title">
        {{ $user->name }}
    </h2>
    @if($user->is_root)
        <p class="user-list-item__element is-root">
            Root
        </p>     
    @endif    
    <p class="user-list-item__element">
        Email: {{ $user->email }}
    </p>
    <p class="user-list-item__element">
        Role: {{ $user->role }}
    </p>    
</li>