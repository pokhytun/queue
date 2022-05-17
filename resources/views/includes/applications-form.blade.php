@can('isUser')

    @if(Auth()->user()->user_has_applications->count() == 0)   {{-- Перевірка чи існує не ролзглянута заявка в користувача --}}
        <form action="{{route('applications.create')}}" class="applications-form">
            <textarea name="text" id="" cols="30" rows="4" class="applications-form__textarea" placeholder="Чому ми маємо саме тобі дати можливість безкоштовного навчання?"></textarea>
            <input type="submit" value="Створити заявку" class="applications-form__btn">
        </form>
    @else
        <span class="message message_success">Заявка подана</span>
    @endif

@endcan