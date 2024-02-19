<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($book->title) ? $book->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"category":"Category","action":"Action","fantasy":"Fantasy","horror":"Horror","comedy":"Comedy"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($book->category) && $book->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Episode') ? 'has-error' : ''}}">
    <label for="Episode" class="control-label">{{ 'Episode' }}</label>
    <input class="form-control" name="Episode" type="number" id="Episode" value="{{ isset($book->Episode) ? $book->Episode : ''}}" >
    {!! $errors->first('Episode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($book->content) ? $book->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('author_name') ? 'has-error' : ''}}">
    <label for="author_name" class="control-label">{{ 'Author Name' }}</label>
    <textarea class="form-control" rows="5" name="author_name" type="textarea" id="author_name" >{{ isset($book->author_name) ? $book->author_name : ''}}</textarea>
    {!! $errors->first('author_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($book->photo) ? $book->photo : ''}}" >
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode ===  'Update' ? 'edit'  : 'Update'}}">
</div>
