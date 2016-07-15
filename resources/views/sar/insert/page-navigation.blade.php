<div class="pull-left">
    @if ($page != 1)
        <a href="/institution/{{ $institution->id  }}/sar/insert/page/{{ $page - 1 }}"
           class="btn btn-primary">Previous</a>
    @endif
</div>
<input type="hidden" name="handling_page" value="{{ $page }}">
<div class="pull-right">
	@if (Session::has('info.inserted_page'))
		{{ print_r(Session::get('info.inserted_page')) }}
		<?php $inserted_page = Session::get('info.inserted_page'); $current_page = 'p'.$page;?>
		@if (!in_array($current_page, $inserted_page))
	    	<button type="submit" class="btn btn-danger">Submit</button>
	    @endif
	@else
	    <button type="submit" class="btn btn-danger">Submit</button>
	@endif
    @if ($page != 6)
        <a href="/institution/{{ $institution->id  }}/sar/insert/page/{{ $page + 1 }}" class="btn btn-primary">Next
        </a>
    @endif
</div>