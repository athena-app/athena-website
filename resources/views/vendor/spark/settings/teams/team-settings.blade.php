@extends('spark::layouts.app')

@section('scripts')
    @if (Spark::billsUsingStripe())
        <script src="https://js.stripe.com/v3/"></script>
    @else
        <script src="https://js.braintreegateway.com/v2/braintree.js"></script>
    @endif
@endsection

@section('navigation')
    @include('settings.teams.nav-items')
@endsection

@section('content')
<spark-team-settings :user="user" :team-id="{{ $team->id }}" inline-template>
    <div class="spark-screen container">
        <div class="row">
            <!-- Tab cards -->
            <div class="col-md-12">
                <div class="tab-content">
                    <!-- Owner Information -->
                    @if (Auth::user()->ownsTeam($team))
                        <div role="tabcard" class="tab-pane active" id="owner">
                            @include('spark::settings.teams.team-profile')
                        </div>
                    @endif

                    <!-- Membership -->
                    @if (Auth::user()->ownsTeam($team))
                    <div role="tabcard" class="tab-pane" id="membership">
                    @else
                    <div role="tabcard" class="tab-pane active" id="membership">
                    @endif
                        <div v-if="team">
                            @include('spark::settings.teams.team-membership')
                        </div>
                    </div>

                    <!-- Billing Tab Panes -->
                    @if (Spark::canBillTeams() && Auth::user()->ownsTeam($team))
                        @if (Spark::hasPaidTeamPlans())
                            <!-- Subscription -->
                            <div role="tabcard" class="tab-pane" id="subscription">
                                <div v-if="user && team">
                                    @include('spark::settings.subscription')
                                </div>
                            </div>
                        @endif

                        <!-- Payment Method -->
                        <div role="tabcard" class="tab-pane" id="payment-method">
                            <div v-if="user && team">
                                @include('spark::settings.payment-method')
                            </div>
                        </div>

                        <!-- Invoices -->
                        <div role="tabcard" class="tab-pane" id="invoices">
                            <div v-if="user && team">
                                @include('spark::settings.invoices')
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</spark-team-settings>
@endsection
