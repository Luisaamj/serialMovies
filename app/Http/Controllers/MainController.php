<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\LanguageStoreRequest;
use App\Http\Requests\MovieStoreRequest;
use App\Http\Requests\PersonStoreRequest;
use App\Job;
use App\Language;
use App\Movie;
use App\Person;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    /*---------Movies---------------*/
    public function listMovies(Request $request)
    {
        $checkrequest = $request->exists('id');
        if ($checkrequest == false) {
            return redirect('/');
        } else {
            $data = $request->all();
            //dar um default
            //return $data;->whereExists('revisted_at')

            if ($data['id'] == 1 || $data['id'] == 2) {
                $movies = Movie::whereTypeId($data['id'])
                    ->whereNotNull('revisted_at')
                    ->whereNotNull('diretor_id')
                    ->whereNotNull('star1_id')
                    ->whereNotNull('star2_id')
                    ->whereNotNull('star3_id')
                    ->get()/*->where('revisted_at')->exists()*/
                ;
                //$moviesChange=$movies->where('revisted_at')->exists();
                $idtype = $data['id'];
                //return $movies;
                return view('movies')
                    ->with('movies', $movies);
            } else {
                return redirect('/');
            }
        }
    }


    public function formMovie()
    {
        $user = Auth::user();
        if ($user['role_id'] == '1') {
            $movies = Movie::all();
            $types = Type::all();
            $categories = Category::all();
            $languages = Language::all();
            $countries = Country::all();
            $directores = Person::whereJobId(1)->get();
            $stars1 = Person::whereJobId(2)->get();;
            $stars2 = Person::whereJobId(2)->get();;
            $stars3 = Person::whereJobId(2)->get();;

            return view('insertMovie')
                ->with('movies', $movies)
                ->with('types', $types)
                ->with('categories', $categories)
                ->with('languages', $languages)
                ->with('countries', $countries)
                ->with('directores', $directores)
                ->with('stars1', $stars1)
                ->with('stars2', $stars2)
                ->with('stars3', $stars3);
        } elseif ($user['role_id'] == 2) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }


    }

    public function insertMovie(MovieStoreRequest $request)
    {
        $user = Auth::user();

        if ($user != '') {
            $data = $request->all();
            $file = $request->file('image')->store('images');
            $data['image'] = $file;
            Movie::create($data);
            return redirect()->route('listMovies');
        } else {
            return redirect('/login');
        }
    }


    public function editMovie(Movie $id)
    {

        $user = Auth::user();
        if ($user == '') {
            return redirect('/login');
        }
        else {

            $movies = Movie::with('type', 'category', 'language', 'country', 'diretor', 'star1', 'star2', 'star3','author')->where('id', $id->id)->get();
            $types = Type::all();
            $categories = Category::all();
            $languages = Language::all();
            $countries = Country::all();
            $directores = Person::whereJobId(1)->get();
            $stars1 = Person::whereJobId(2)->get();
            $stars2 = Person::whereJobId(2)->get();
            $stars3 = Person::whereJobId(2)->get();


            return view('editMovie')
                ->with('movies', $movies)
                ->with('types', $types)
                ->with('categories', $categories)
                ->with('languages', $languages)
                ->with('countries', $countries)
                ->with('directores', $directores)
                ->with('stars1', $stars1)
                ->with('stars2', $stars2)
                ->with('stars3', $stars3);
        }
    }

    public function updateMovie(MovieStoreRequest $request)
    {
        $user = Auth::user();
        if ($user == '') {
            return redirect('/login');
        } else {
            $data=$request->only(['id','title','description','imdb','image','year','releaseDate','type_id','category_id','language_id','country_id','diretor_id','star1_id','star2_id','star3_id']);

            if($request->hasFile('image')){
                $file=$request->file('image')->store('images');
                $data['image']=$file;
            }

            Movie::where('id',$data['id'])->update($data);

            return redirect('listMovies?id=1');
        }
    }

    /*---------People---------------*/
    public function listPeople()
    {
        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $people = Person::all();

            return view('people')->with('people', $people);
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }

    }

    public function formPerson()
    {
        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $people = Person::all();
            $jobs = Job::all();
            return view('insertPerson')
                ->with('people', $people)
                ->with('jobs', $jobs);
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }

    }

    public function insertPerson(PersonStoreRequest $request)
    {
        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $data = $request->all();
            $file = $request->file('image')->store('images');
            $data['image'] = $file;
            Person::create($data);
            return redirect()->route('listPeople');
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }


    }

    /*---------Categories---------------*/
    public function listCategories()
    {

        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $categories = Category::all();
            //return $categories;
            return view('categories')->with('categories', $categories);
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }

    }

    public function formCategory()
    {
        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $categories = Category::all();
            return view('insertCategory')
                ->with('categories', $categories);
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }

    }

    public function insertCategory(CategoryStoreRequest $request)
    {

        $user = Auth::user();

        $data = $request->all();

        if ($user['role_id'] == '1') {

            Category::create($data);
            return redirect()->route('listCategories');
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }


    }


    /*---------Countries---------------*/
    public function listCountries()
    {
        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $countries = Country::all();
            //return $countries;
            return view('countries')->with('countries', $countries);
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }

    }

    public function formCountry()
    {
        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $countries = Country::all();
            return view('insertCountry')
                ->with('countries', $countries);
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }

    }

    public function insertCountry(CountryStoreRequest $request)
    {
        $user = Auth::user();
        $data = $request->all();

        if ($user['role_id'] == '1') {
            $file = $request->file('flag')->store('images');
            $data['flag'] = $file;

            Country::create($data);
            return redirect()->route('listCountries');
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }


    }

    /*---------Languages---------------*/
    public function listLanguages()
    {

        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $languages = Language::all();
            //return $languages;
            return view('languages')->with('languages', $languages);
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }

    }

    public function formLanguage()
    {
        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $languages = Category::all();
            return view('insertLanguage')
                ->with('languages', $languages);
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }

    }

    public function insertLanguage(LanguageStoreRequest $request)
    {
        $user = Auth::user();

        if ($user['role_id'] == '1') {
            $data = $request->all();
            Language::create($data);
            return redirect()->route('listLanguages');
        } elseif ($user['role_id' == '2']) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }

    }
}
