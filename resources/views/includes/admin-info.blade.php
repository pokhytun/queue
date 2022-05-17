
<ul class="admin__list">
    <div class="admin__item">Статуси адміністраторів</div>
    @foreach ($admins as $admin)
        <li class="admin__item @if($admin->is_admin_active_exists)admin__item_active @endif"> {{$admin->name}}</li> 
    @endforeach
</ul>
