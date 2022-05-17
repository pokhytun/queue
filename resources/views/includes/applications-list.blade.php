@if(!$applications->count()) {{-- СМС якщо відсутні заявки--}}
 <span>Заявок не знайдено</span>
@endif
<ul class="applications-list">
    @foreach ($applications as $application)
        <li class="applications__item">
           
        <div class="application-user">
            {{$application->user->name}}
            @can('isAdmin') 
                <button class="more-info_btn" data-id="{{$application->id}}">Більше інформації</button>
            @endcan
        </div>
            
            @if($application->status == 0) {{-- Статус у черзі --}}

                <div>
                    <span class="applications__status aplication__status_waiting">В черзі</span> 
                    @if($application->admin_id == Auth()->user()->id) 
                        <a href="{{route('applications.edit' , $application->id)}}" class="action">Вконати без черги</a>
                    @endif
                </div>
           
            @elseif($application->status == 1) {{-- Cтатус в обробці --}}

                <div>

                    <span class="applications__status aplication__status_processing">Опрацьовується адміном: {{$application->admin->name}}</span> 
                    @can('isAdmin')
                        @if($application->admin_id == Auth()->user()->id) {{--Якщо саме цей адмін перевіряє заявку--}}
                            <a href="{{route('applications.edit' , $application->id)}}">Завершити заявку</a>
                        @endif
                    @endcan
                </div>
              
            @elseif($application->status == 2)

                <span class="applications__status aplication__status_done">Опрацьована адміном : {{$application->admin->name}}</span> 

            @endif
            
        </li>
    @endforeach
</ul>
