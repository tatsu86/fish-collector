@foreach ($fishes as $fish)
  <tr>
    <td>{{ $fish->name }}</td>
    <td>{{ $fish->max_size }}</td>
    <td>{{ $fish->memo }}</td>
  </tr>

@endforeach
