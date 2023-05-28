@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
{{-- <img src="{{asset('images/logo/swift-shop.png')}}" class="logo" alt="Laravel Logo"> --}}
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
