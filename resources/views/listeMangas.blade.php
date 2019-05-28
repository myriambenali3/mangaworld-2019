
            <h1>Liste de mes Mangas</h1>
        </div>
        <table class="table table-bordered table-striped">

            <thead>
                <th>Id</th>
                <th>Prix</th>
                <th>Titre</th>
                <th>Genre</th>
            </thead>

            @foreach($lesMangas as $manga)
                <tr>
                    <td> {{ $manga->getIdManga() }} </td>
                    <td> {{ $manga->getPrix()}} </td>
                    <td> {{ $manga->getTitre()}} </td>
                    <td> {{ $manga->getGenre() -> getLibelleGenre()}} </td>


                </tr>
            @endforeach
        </table>


