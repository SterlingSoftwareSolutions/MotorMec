

<div class="progressBar">
    <div class="progress" style="width: {{$percentage}}%;" id="progress"></div>
    <div class="progress-step {{$step == 1 ? 'progress-step-active' : ''}}" data-title="CAR INFO"></div>
    <div class="progress-step {{$step == 2 ? 'progress-step-active' : ''}}" data-title="Supporting Documents"></div>
    <div class="progress-step {{$step == 3 ? 'progress-step-active' : ''}}" data-title="Payment"></div>
</div>