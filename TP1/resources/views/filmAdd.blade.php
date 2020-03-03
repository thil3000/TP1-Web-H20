{{-- <a href="films">film adding</a> --}}
<title>la section film</title>
<?php
echo Form::open(['url' => 'films', 'method' => 'post']);
echo Form::text('id','1');
echo Form::text('title','le retour de robert');
echo Form::text('release_year','23 avril 2010');
echo Form::text('length','105');
echo Form::text('description','blabla');
echo Form::text('rating','R');
echo Form::text('langage_id',1);
echo Form::text('special_features',1);
echo Form::text('image');
echo Form::submit('Submit');
echo Form::close();
?>