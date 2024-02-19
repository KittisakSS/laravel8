<x-bootstrap title="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Book {{ $book->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/book') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/book/' . $book->id . '/edit') }}" title="Edit Book"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Edit</button></a>

                        <form method="POST" action="{{ url('book' . '/' . $book->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Book"
                                onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i> Delete</button>
                        </form>
                        <a href="{{ url('/book/' . $book->id . '/edit') }}" title="Edit Book"><button
                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Add Book</button></a>
                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                        
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $book->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Title </th>
                                        <td> {{ $book->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> Category </th>
                                        <td> {{ $book->category }} </td>
                                    </tr>
                                    <tr>
                                        <th> Episode </th>
                                        <td> {{ $book->Episode }} </td>
                                    </tr>
                                    <tr>
                                        <th> Content </th>
                                        <td> {{ $book->content }} </td>
                                    </tr>
                                    <tr>
                                        <th> Author Name </th>
                                        <td> {{ $book->author_name }} </td>
                                    </tr>
                                    {{-- <div>
                                        <strong>Phone: </strong>
                                        <span>{{ $staff->phone }}</span>
                                    </div> --}}
                                    <div class="row my-4">
                                        <div class="col-lg-4">
                                            <img src="{{ asset("/storage/{$book->photo}") }}" class="img-fluid img-thumbnail" />
                                        </div>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-bootstrap>
