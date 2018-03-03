<li class="nav-item">
    <a class="nav-link" href="/settings">
        <i class="fa fa-nav fa-fw fa-btn fa-arrow-left"></i>
        Your Settings
    </a>
</li>

@if (Auth::user()->ownsTeam($team))
    <li class="nav-item ">
        <a class="nav-link active" href="#owner" role="tab" data-toggle="tab">
            <i class="fa fa-nav fa-fw fa-btn fa-user-circle"></i>
            {{__('teams.team_profile')}}
        </a>
    </li>
@endif

<li class="nav-item ">
    <a class="nav-link" href="#membership" role="tab" data-toggle="tab">
        <i class="fa fa-nav fa-fw fa-btn far fa-check-circle"></i>
        {{__('Membership')}}
    </a>
</li>

@if (Spark::canBillTeams() && Auth::user()->ownsTeam($team))
    @if (Spark::hasPaidTeamPlans())
        <li class="nav-item ">
            <a class="nav-link" href="#subscription" role="tab" data-toggle="tab">
                <i class="fa fa-nav fa-fw fa-btn fa-calendar"></i>
                {{__('Subscription')}}
            </a>
        </li>

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
@endif
