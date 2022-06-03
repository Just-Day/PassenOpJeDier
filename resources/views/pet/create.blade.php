@extends( 'default')

@section('title')
    {{"Make Pet"}}
@endsection

@section('content')

<article class="create-form a-popup">
    <form class="create-form__form" action="/pet" method="POST" >
        @csrf 
        <section class="create-form__section">
            <label for="name"> Naam </label>
            <input class="create-form__input" name="name" id="name" type="text" placeholder="What kind of pet and what breed?"/>
        </section>

        <section class="create-form__section">
            <label for="kind"> Soort </label>
            <select class="create-form__input" id="kind" name="kind">
                @foreach($kind_of_pet as $kind_of_pet)
                    <option value="{{$kind_of_pet->kind}}"> {{$kind_of_pet->kind}} </option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="description"> Description </label>
            <textarea class="create-form__input  create-form__input--big" name="description" id="description" type="text-area" placeholder="Type here your description of your pet!"></textarea>
        </section>

        <section class="create-form__section">
            <label for="length"> Lengte </label>
            <input class="create-form__input"name="length" id="length" type="text" placeholder="How many hours?"/>
        </section>

        <section class="create-form__section">
            <label for="wage"> Loon </label>
            <input class="create-form__input"name="wage" id="wage" type="text" placeholder="Wage in 0,00?"/>
        </section>

        <section class="create-form__section">
            <label for="when"> Wanneer </label>
            <input class="create-form__input" name="when" id="when" type="text" placeholder="Date in (d)d-(m)m-yyyy" />
        </section>

        <section class="create-form__section">
            <label for="user"> E-mail </label>
            <input class="create-form__input" name="user" id="user" type="text" placeholder="Example@gmail.com" />
        </section>

        <section class="create-form__section">
            <label for="image"> Afbeelding </label>
            <select class="create-form__input" name="image" id="image">
                @foreach($images as $image)
                    <option value="{{$image->image}}"> {{$image->image}} </option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <button class="create-form__button" type="submit"> Maak pet </button> 
            <a class="create-form__back" href="/pet"> Back to pets </a>
        </section>


    </form>
</article>
@endsection