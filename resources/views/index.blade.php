<div>全部で{{ count($posts) }}件です。</div>
<ul>
  @foreach($posts as $post)
    <li>{{ $post['date'] . ' | ' . $post['body'] }}</li>
  @endforeach
</ul>
