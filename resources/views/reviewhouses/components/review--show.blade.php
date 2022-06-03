    <article class="create-form-pet a-popup">
        <form class="create-form__form" action="/house/{id}/review" method="POST">
            @csrf
            <h2> Reviews </h2>
            <section class="create-form__section">
                <label for="user"> Name </label>
                <input class="create-form__input" name="user" id="user" type="text" placeholder="Example@gmail.com" />
            </section>
            <section class="create-form__section">
                <label for="review"> Your review </label>
                <textarea class="create-form__input create-form-pet__input--big" name="review" id="review" type="text-area" placeholder="What is your experience?"></textarea>
            </section>
            <section class="create-form__section">
                <button class="create-form__button" type="submit"> Maak review </button> 
            </section>
            <section class="card__information">
                <section class="card__information--text">
                    {{$review_houses->user ?? "No Review yet"}}
                </section>
            </section>  
            <section class="card__information">
                <section class="card__information--text">
                    {{$review_houses->review ?? "No Review yet"}}
                </section>
            </section>
        </form>
    </article>