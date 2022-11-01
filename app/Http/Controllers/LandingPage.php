<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function biodata()
    {
        $data['title'] = "Suara Film";
        return view('biodata',$data);
    }
    public function galeriBiodata()
    {
        $data['title'] = "Suara Film";
        return view('galeri_biodata',$data);
    }

    public function film()
    {
        $data['title'] = "Suara Film";
        $data['list_film'] = $this->list_film();
        return view('film',$data);
    }

    public function listFilm()
    {
        $data['title'] = "Suara Film";
        $data['list_film'] = $this->list_film();
        return view('list_film',$data);
    }

    public function detailFilm()
    {
        $data['title'] = "Suara Film";
        $data['list_film'] = $this->list_film();
        return view('detail_film',$data);
    }

    private function list_film()
    {
        return [
            [
                'id' => 1,
                'title' => "Home Alone",
                'genre' => "Comedy Kid",
                'year' => "1991",
                'date' => "16 August 1991",
                'long' => "1j 44m",
                'age' => 'PG',
                'director' => "Chris Columbus",
                'actor' => "Macaulay Culkin, Joe Pesci, Daniel Stern, John Heard, Roberts Blossom, Catherine O'Hara, Angela Goethals, Devin Ratray, Gerry Bamman, Hillary Wolf, John Candy, Larry Hankin, Michael C. Maronna, Kristin Minter, Daiana Campeanu, Jedidiah Cohen, Kieran Culkin, Senta Moses, Anna Slotky, Terrie Snell, Jeffrey Wiseman, Virginia Smith, Matt Doherty, Ralph Foody, Michael Guido, Ray Toler, Billie Bird, Bill Erwin, Gerry Becker, Alan Wilder, Hope Davis, Kenneth Hudson Campbell, Jim Ortlieb",
                'img-cover' => "https://i.pinimg.com/564x/4c/80/ac/4c80ac0ccf18e1a198bc6b4120a43a79.jpg",
                "trailer" => "https://www.youtube.com/embed/jEDaVHmw7r4"
            ],
            [
                'id' => 2,
                'title' => "Joker",
                'genre' => "Thriller Crime",
                'year' => "2019",
                'date' => "2 October 2019",
                'long' => "2j 2m",
                'age' => 'R',
                'director' => "Todd Phillips",
                'actor' => "Joaquin Phoenix, Robert De Niro, Zazie Beetz, Frances Conroy, Brett Cullen, Shea Whigham, Bill Camp, Glenn Fleshler, Leigh Gill, Josh Pais, Rocco Luna, Marc Maron, Sondra James, Murphy Guyer, Douglas Hodge, Dante Pereira-Olson, Carrie Louise Putrello, Sharon Washington, Hannah Gross, Frank Wood, Brian Tyree Henry, April Grace",
                'img-cover' => "https://i.pinimg.com/564x/76/79/fb/7679fb44d1fe6fedf03f637b6fd15079.jpg",
                "trailer" => "https://www.youtube.com/embed/zAGVQLHvwOY"
            ],
            [
                'id' => 3,
                'title' => "E.T. the Extra-Terrestrial",
                'genre' => "Sci-fi Adventure",
                'year' => "1983",
                'date' => "1 April 1983",
                'long' => "1j 55m",
                'age' => 'PG',
                'director' => "Steven Spielberg",
                'actor' => "Dee Wallace, Henry Thomas, Peter Coyote, Robert MacNaughton, Drew Barrymore, K.C. Martel, Sean Frye, C. Thomas Howell, Erika Eleniak",
                'img-cover' => "https://i.pinimg.com/564x/a9/29/67/a92967108cb3cd316d75ee89c052d8b4.jpg ",
                "trailer" => "https://www.youtube.com/embed/wZNInG8kSiA"
            ],
            [
                'id' => 4,
                'title' => "Split",
                'genre' => "Thriller Horror",
                'year' => "2017",
                'date' => "15 February 2017",
                'long' => "1j 57m",
                'age' => 'PG-13',
                'director' => "M. Night Shyamalan",
                'actor' => "James McAvoy, Anya Taylor-Joy, Betty Buckley, Haley Lu Richardson, Jessica Sula, Izzie Coffey, Brad William Henke, Sebastian Arcelus, Neal Huff, Ukee Washington, Ann Wood, Robert Michael Kelly, M. Night Shyamalan, Rosemary Howard, Jerome Gallman, Lyne Renée, Kate Jacoby, Peter Patrikios, Kash Goins, Roy James Wilson, Christopher Lee Philips, Julie Potter, Ameerah Briggs, Nakia Dillard, Robin Rieger, Emlyn Elisabeth, Morinelli, Dann Fink, Bruce Winant",
                'img-cover' => "https://i.pinimg.com/564x/04/7e/a7/047ea77d4ab0eb6c18e83e25309e8f77.jpg",
                "trailer" => "https://www.youtube.com/embed/84TouqfIsiI"
            ],
            [
                'id' => 5,
                'title' => "Die Hard",
                'genre' => "Action Thriller",
                'year' => "1988",
                'date' => "12 July 1988",
                'long' => "2j 12m",
                'age' => 'R',
                'director' => "John McTiernan",
                'actor' => "Bruce Willis, Bonnie Bedelia, Reginald VelJohnson, Paul Gleason, De'voreaux White, William Atherton, Hart Bochner, James Shigeta, Alan Rickman, Alexander Godunov, Bruno Doyon, Andreas Wisniewski, Clarence Gilyard Jr., Joseph Plewa, Lorenzo Caccialanza, Gérard Bonn, Dennis Hayden, Al Leong, Gary Roberts, Hans Buhringer, Wilhelm von Homburg, Robert Davi, Grand L. Bush",
                'img-cover' => "https://i.pinimg.com/736x/6d/bc/28/6dbc281e78eaa97de537744ac5aad3ae.jpg",
                "trailer" => "https://www.youtube.com/embed/gYWvwkXreaI"
            ],
            [
                'id' => 6,
                'title' => "Pet Sematary",
                'genre' => "Horror Thriller",
                'year' => "2019",
                'date' => "5 April 2019",
                'long' => "1j 41m",
                'age' => 'R',
                'director' => "Kevin Kölsch, Dennis Widmyer",
                'actor' => "Jason Clarke, Amy Seimetz, John Lithgow, Jeté Laurence, Hugo Lavoie, Lucas Lavoie, Obssa Ahmed, Alyssa Brooke Levine, Maria Herrera, Frank Schorpion, Linda E. Smith, Sonia Maria Chirila, Naomi Frenette, Suzi Stingl, Kelly Lee, Nina Lauren, Alison O'Donnell, Raphaél Laporte, Simon Pelletier-Gilbert",
                'img-cover' => "https://i.pinimg.com/564x/d0/11/33/d0113352f4b921fc92d958e106daefe1.jpg",
                "trailer" => "https://www.youtube.com/embed/gYWvwkXreaI"
            ],
            [
                'id' => 7,
                'title' => "Free Guy",
                'genre' => "Action Sci-fi",
                'year' => "2021",
                'date' => "20 October 2021",
                'long' => "1j 55m",
                'age' => 'PG-13',
                'director' => "Shawn Levy",
                'actor' => "Ryan Reynolds, Jodie Comer, Lil Rel Howery, Joe Keery, Utkarsh Ambudkar, Taika Waititi, Channing Tatum, Aaron W Reed, Britne Oldford, Camille Kostek, Mark Lainer, Mike Devine, Sophie Levy, Vernon Scott, Naheem Garcia, Anabel Graetz, Ric Plamenco, Kenneth Israel, Michael Malvesti, Colin Allen, Michael Tow, Hugh Jackman, Dwayne Johnson, Tina Fey, John Krasinski, Chris Evans, Alex Trebek, Lara Spencer, Matty Cardarople, Jonathan De Azevedo, Destiny Claymore, Tyler Blevins, Imane 'Pokimane' Anys, Lannan Eacott",
                'img-cover' => "https://i.pinimg.com/564x/a1/88/e5/a188e568a782853d090c381ee38d79f3.jpg",
                "trailer" => "https://www.youtube.com/embed/X2m-08cOAbc"
            ],
            [
                'id' => 8,
                'title' => "Deadpool",
                'genre' => "Action Adventure",
                'year' => "2016",
                'date' => "10 February 2016",
                'long' => "1j 48m",
                'age' => 'R',
                'director' => "Tim Miller",
                'actor' => "Ryan Reynolds, Karan Soni, Ed Skrein, Michael Benyaer, Stefan Kapicic, Brianna Hildebrand, Style Dayne, Kyle Cassie, Taylor Hickson, Naika Toussaint, Randal Reeder, T.J. Miller, Isaac C. Singleton Jr., Morena Baccarin, Justyn Shippelt, Donna Yamamoto, Jed Rees, Hugh Scott, Gina Carano, Cindy Piper, Em Haine, Aatash Amir, Chad Riley, Paul Belsito, Darcey Johnson, Leslie Uggams, Kyle Rideout, Jason William Day, Stan Lee, Ben Wilkinson, Rachel Sheen, Paul Lazenby, Rob Hayter",
                'img-cover' => "https://i.pinimg.com/564x/a4/3d/27/a43d27c53e995321825f4bcb881006f5.jpg",
                "trailer" => "https://www.youtube.com/embed/ONHBaC-pfsk"
            ],
            [
                'id' => 9,
                'title' => "Spider-Man: Homecoming",
                'genre' => "Action Adventure",
                'year' => "2017",
                'date' => "5 July 2017",
                'long' => "2j 13m",
                'age' => 'PG-13',
                'director' => "Jon Watts",
                'actor' => "Tom Holland, Michael Keaton, Robert Downey Jr., Marisa Tomei, Jon Favreau, Gwyneth Paltrow, Zendaya, Donald Glover, Jacob Batalon, Laura Harrier, Tony Revolori, Bokeem Woodbine, Tyne Daly, Abraham Attah, Hannibal Buress, Kenneth Choi, Selenis Leyva, Angourie Rice, Martin Starr, Garcelle Beauvais, Michael Chernus, Michael Mando, Logan Marshall-Green, Jennifer Connelly, Gary Weeks, Christopher Berry, Jorge Lendeborg Jr., Tunde Adebimpe, Tiffany Espensen, Isabella Amara, Michael Barbieri, Josie Totah, Hemky Madera, Zach Cherry, Kirk R. Thatcher, Yu Lew, Sondra James, Bob Adrian, Gary Richardson, Stan Lee, Joe Hang, Wayne, Chris Evans, Alexa Laraki, Liza Fagin, Kerry Condon, John Penick, Ethan Dizon",
                'img-cover' => "https://i.pinimg.com/564x/cb/e0/80/cbe0805aea34cca87635e51a007598a7.jpg",
                "trailer" => "https://www.youtube.com/embed/rk-dF1lIbIg"
            ],
        ];
    }
}
