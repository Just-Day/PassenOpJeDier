@extends( 'default')

@section('title')
    {{"Make House"}}
@endsection

@section('content')

<article class="create-form a-popup">
    <form class="create-form__form" action="/house" method="POST" >
        @csrf 
        <section class="create-form__section">
            <label for="name"> Naam </label>
            <input class="create-form__input"name="name" id="name" type="text" />
        </section>

        <section class="create-form__section">
            <label for="kind"> Soort </label>
            <select class="create-form__input" id="kind" name="kind">
                @foreach($kind_of_houses as $kind_of_houses)
                    <option value="{{$kind_of_houses->kind}}"> {{$kind_of_houses->kind}} </option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="description"> Description </label>
            <textarea class="create-form__input  create-form__input--big" name="description" id="description" type="text-area" placeholder="Type here your description of your house!"></textarea>
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
            <button class="create-form__button" type="submit"> Maak house </button> 
            <a class="create-form__back" href="/house"> Back to houses </a>
        </section>

    </form>
</article>
@endsection