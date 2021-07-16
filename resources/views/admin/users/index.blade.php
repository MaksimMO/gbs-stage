@extends('layouts.admin')
@section('content')
{{--@can('user_create')--}}
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("users.create") }}">
                Додати тренера
            </a>
        </div>
    </div>
{{--@endcan--}}
<div class="card">
    <div class="card-header">
        Список тренерів
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>{{ trans('cruds.user.fields.id') }}</th>
                        <th>Ім'я</th>
{{--                        <th>--}}
{{--                            {{ trans('cruds.user.fields.email') }}--}}
{{--                        </th>--}}
{{--                        <th>--}}
{{--                            {{ trans('cruds.user.fields.email_verified_at') }}--}}
{{--                        </th>--}}
                        <th>Роль</th>
                        <th>Заняття</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        @if($user->roles->count())
                        <tr data-entry-id="{{ $user->id }}">
                            <td></td>
                            <td>
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
{{--                            <td>--}}
{{--                                {{ $user->email ?? '' }}--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                {{ $user->email_verified_at ?? '' }}--}}
{{--                            </td>--}}
                            <td>
                                @foreach($user->roles as $key => $item)
                                    @if($item->title == 'Teacher')
                                        @php $roleName = 'Тренер' @endphp
                                    @endif
                                    <span class="badge badge-info">{{ $roleName }}</span>
                                @endforeach
                            </td>
                            <td>
                                @if($user->schoolClasses->count())
                                    @foreach($user->schoolClasses as $class)
                                        <span class="badge badge-info">{{ $class->name }}</span>
                                    @endforeach
                                @endif
                            </td>
                            <td>
{{--                                @can('user_show')--}}
                                    <a class="btn btn-xs btn-primary" href="{{ route('users.show', $user->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
{{--                                @endcan--}}

{{--                                @can('user_edit')--}}
                                    <a class="btn btn-xs btn-info" href="{{ route('users.edit', $user->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
{{--                                @endcan--}}

{{--                                @can('user_delete')--}}
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
{{--                                @endcan--}}

                            </td>

                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
{{--@can('user_delete')--}}
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ url('users/massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
{{--@endcan--}}

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
    language: {
        url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Ukrainian.json'
    }
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
