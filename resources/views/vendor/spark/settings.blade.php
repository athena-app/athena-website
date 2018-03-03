@extends('spark::layouts.app')

@section('scripts')
    @if (Spark::billsUsingStripe())
        <script src="https://js.stripe.com/v3/"></script>
    @else
        <script src="https://js.braintreegateway.com/v2/braintree.js"></script>
    @endif
@endsection

@section('navigation')
    @include('settings.nav-items')
@endsection

@section('content')
    <spark-settings :user="user" :teams="teams" inline-template>
        <div class="spark-screen container">
            <div class="row">
                <!-- Tabs -->
                <div class="col-md-12">
                    <div class="tab-content">
                        <!-- Profile -->
                        <div role="tabcard" class="tab-pane active" id="profile">
                            @include('spark::settings.profile')
                        </div>

                        <!-- Teams -->
                        @if (Spark::usesTeams())
                            <div role="tabcard" class="tab-pane" id="{{Spark::teamsPrefix()}}">
                                @include('spark::settings.teams')
                            </div>
                        @endif

                    <!-- Security -->
                        <div role="tabcard" class="tab-pane" id="security">
                            @include('spark::settings.security')
                        </div>

                        <!-- API -->
                        @if (Spark::usesApi())
                            <div role="tabcard" class="tab-pane" id="api">
                                @include('spark::settings.api')
                            </div>
                        @endif

                    <!-- Billing Tab Panes -->
                        @if (Spark::canBillCustomers())
                            @if (Spark::hasPaidPlans())
                            <!-- Subscription -->
                                <div role="tabcard" class="tab-pane" id="subscription">
                                    <div v-if="user">
                                        @include('spark::settings.subscription')
                                    </div>
                                </div>
                            @endif

                        <!-- Payment Method -->
                            <div role="tabcard" class="tab-pane" id="payment-method">
                                <div v-if="user">
                                    @include('spark::settings.payment-method')
                                </div>
                            </div>

                            <!-- Invoices -->
                            <div role="tabcard" class="tab-pane" id="invoices">
                                @include('spark::settings.invoices')
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </spark-settings>
@endsection
