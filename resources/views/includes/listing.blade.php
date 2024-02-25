 <main class="listing">
     <div>
         <h1>{{ $name ?? '' }}</h1>

         @forelse ($courses as $course)
             <section>
                 <h3>{{ $course->title }}</h3>
                 <ul>
                     @foreach ($course->$chapters as $chapter)
                         <li>{{ $chapter->chapter }}</li>
                     @endforeach

                 </ul>
             </section>
         @empty
             <section>
                 <h3>pas de titre</h3>
                 <ul>
                     <li>pas de lesson</li>
                 </ul>
             </section>
         @endforelse


     </div>
 </main>
