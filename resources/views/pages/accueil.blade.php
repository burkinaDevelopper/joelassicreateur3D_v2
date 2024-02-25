@extends('layouts.main')
@section('content')
    <main class="accueil">
        <div>
            <div class="carousel">
                <button class="btn" id="prev">&#10096;</button>
                <button class="btn" id="next">&#10097;</button>
                <ul>

                    <li class="slide active">
                        <h1>Découvrez l'excellence : <br> Maîtrisez l'art du Rendu 3D <br> avec la Formation Expert de
                            Joel</h1>
                        <img src="{{ asset('assets/image/banner.png') }}" alt="image carousel">
                    </li>
                    @forelse ($images as $img)
                        <li class="slide">
                            <img src="{{ $img->url }}" alt="{{ $img->name }}">
                        </li>
                    @empty
                        <li class="slide">

                        </li>
                    @endforelse

                </ul>
            </div>
        </div>
        <section class="avis">
            <h2>Témoignages </h2>
            <div class="container">
                <div class="text">
                    <span>Jul 20, 2022 3commentaires</span>
                    <h3>Une véritable expertise</h3>
                    <p>Le formateur expérimenté démontre une véritable expertise dans son domaine. Ses connaissances
                        approfondies et son approche pédagogique font de chaque session un apprentissage enrichissant.Je
                        tiens à exprimer ma sincère gratitude envers notre formateur</p>
                    <strong>PAR ABEL.</strong>
                </div>
                <div class="text">
                    <span>Jul 15, 2022 3 commentaires</span>
                    <h3>Un guide exceptionnel</h3>
                    <p>En tant qu'apprenant, j'ai eu la chance de bénéficier des enseignements de ce formateur expérimenté.
                        Sa capacité à expliquer des concepts complexes de manière simple et à guider à travers des
                        situations pratiques en font un guide exceptionnel</p>
                    <strong>PAR CATHERINE</strong>
                </div>
                <div class="text">
                    <span>Jul 5, 2023 3 commentaires</span>
                    <h3>Une valeur ajoutée indéniable</h3>
                    <p>Travailler avec un formateur aussi expérimenté a été une expérience extrêmement enrichissante. Sa
                        passion pour le sujet, sa patience et son engagement en font une valeur ajoutée indéniable pour
                        quiconque cherche à approfondir ses compétences.</p>
                    <strong>PAR SAMUEL</strong>
                </div>
            </div>
        </section>
        <section class="contact-infos">

            @if (session('status'))
                <div class="alert-admin">{{ session('status') }}</div>
            @endif

            <form action="{{ route('adminNotification') }}" method="post">
                @csrf
                <div class="name">
                    <input type="text" name="name" id="name" placeholder="Nom">
                </div>
                <div class="email">
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="message">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                </div>
                <div class="submit">
                    <button type="submit">Envoyer</button>
                </div>

            </form>
            <div class="description">
                <h3>Réservez Votre Séance Gratuite de Rendu 3D</h3>
                <p> Si vous avez la moindre question ou une <em>suggestion à partager</em>, n'hésitez surtout pas à me
                    <strong>contacter</strong>. Je
                    suis là pour vous aider et je suis ouvert(e) à toutes les idées. Votre avis est précieux pour moi, et je
                    suis impatient(e) de pouvoir échanger avec vous. Ensemble, nous pouvons explorer toutes les possibilités
                    et trouver les meilleures solutions adaptées à vos besoins. À très bientôt !
                </p>
            </div>
        </section>
    </main>
@endsection
