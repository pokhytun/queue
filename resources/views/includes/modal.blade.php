<div class="modal">
    <div class="about-sender">
        <div class="abour-sender__name">Ім'я: {{$application->user->name}} </div>
        <div class="abour-sender__email">Електронна адреса: {{$application->user->email}}</div>
        <div class="abour-sender__date">Номер телефону: {{$application->user->phone_number}}</div>
        <div class="abour-sender__date">Дата: {{$application->user->created_at}}</div>
    </div>
    <p class="modal__text">
        {{$application->text}}
    </p>
    <span class="close-modal">x</span>
</div>