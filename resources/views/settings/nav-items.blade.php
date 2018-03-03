<li class="nav-item ">
    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">
        <i class="fa fa-nav fa-fw fa-btn fa-user-circle"></i>
        {{__('Profile')}}
    </a>
</li>

@if (Spark::usesTeams())
    <li class="nav-item ">
        <a class="nav-link" href="#{{Spark::teamsPrefix()}}" role="tab" data-toggle="tab">
            <i class="fa fa-nav fa-fw fa-btn fa-users"></i>
            {{__('teams.teams')}}
        </a>
    </li>
@endif

<li class="nav-item ">
    <a class="nav-link" href="#security" role="tab" data-toggle="tab">
        <i class="fa fa-nav fa-fw fa-btn fa-lock"></i>
        {{__('Security')}}
    </a>
</li>

@if (Spark::usesApi())
    <li class="nav-item ">
        <a class="nav-link" href="#api" role="tab" data-toggle="tab">
            <i class="fa fa-nav fa-fw fa-btn fa-flask"></i>
            {{__('API')}}
        </a>
    </li>
@endif

<!-- Billing Tabs -->
@if (Spark::canBillCustomers())
    @if (Spark::hasPaidPlans())
        <li class="nav-item ">
            <a class="nav-link" href="#subscription" role="tab" data-toggle="tab">
                <i class="fa fa-nav fa-fw fa-btn fa-calendar-plus"></i>
                {{__('Subscription')}}
            </a>
        </li>
    @endif

    <li class="nav-item ">
        <a class="nav-link" href="#payment-method" role="tab" data-toggle="tab">
            <i class="fa fa-nav fa-fw fa-btn fa-credit-card"></i>
            {{__('Payment Method')}}
        </a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="#invoices" role="tab" data-toggle="tab">
            <i class="fa fa-nav fa-fw fa-btn fa-sticky-note"></i>
            {{__('Invoices')}}
        </a>
    </li>
@endif
