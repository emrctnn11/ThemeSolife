<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          {{ $breadcrumb_title ?? '' }}
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Ana Sayfa</a></li>
              {{ $slot ?? ''}}
          </ol>
        </div>
      </div>
    </div>
</div>
