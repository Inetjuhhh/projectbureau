   <div class="tab p-4">
    <div class="md:flex gap-4">
        <div class="flex-1">
              <h4 class="text-2xl font-bold mb-4">Project Info</h4>
             <div class="text-group mb-8">
                <p class="text-lg text-gray-400 font-bold">Naam</p>
                <p>{{$project->name}}</p>
            </div>

            <div class="text-group mb-8">
                <p class="text-lg text-gray-400 font-bold">Categorie</p>
                <p>Digitale werkplaats project</p>
            </div>

             <div class="text-group mb-8">
                <p class="text-lg text-gray-400 font-bold">Startdatum</p>
                <p>{{Date('d-m-Y', strtotime($project->start_date))}}</p>
            </div>

            <div class="text-group mb-8">
                <p class="text-lg text-gray-400 font-bold">Korte Beschrijving <small><i>(van projectbegeleider)</i></small></p>
                <p>{{$project->description}}</p>
            </div>

              <div class="text-group mb-8">
                <p class="text-lg text-gray-400 font-bold">Info voor projectgroepen <small><i>(van docententeam)</i></small></p>
                <p>{{$project->description}}</p>
            </div>

             <div class="text-group mb-8">
                <p class="text-lg text-gray-400 font-bold mb-2">Bijlagen</p>

                <ul class="mb-8 space-y-4 text-left text-gray-500 dark:text-gray-400">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span>Interview uitwerking</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span>Database Diagram</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span>Schetsen van homepage</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span>Hosting gegevens</span></span>
                    </li>

                </ul>

            </div>

        </div>
        <div class="flex-1">
            <h4 class="text-2xl font-bold mb-4">Contactpersoon Info</h4>
            <div class="text-group mb-8">
                <p class="text-lg text-gray-400 font-bold">Naam</p>
                <p>{{$project->customer->name}}</p>
            </div>
            <div class="text-group mb-8">
                <p class="text-lg text-gray-400 font-bold">Email</p>
                <p>{{$project->customer->email}}</p>
            </div>
            <div class="text-group mb-8">
                <p class="text-lg text-gray-400 font-bold">Telefoon</p>
                <p>{{$project->customer->phone}}</p>
            </div>
        </div>
    </div>
</div>