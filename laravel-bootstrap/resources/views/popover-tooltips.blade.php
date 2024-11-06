<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trezo - Laravel Admin Dashboard Template</title>
        <!-- Styles -->
        @include('partials.styles')
    </head>
    <body class="boxed-size">
        @include('partials.preloader')
        @include('partials.sidebar')

        <div class="container-fluid">
			<div class="main-content d-flex flex-column">
				<!-- Start Header Area -->
				@include('partials.header')
				<!-- End Header Area -->

				<div class="main-content-container overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                        <h3 class="mb-0">Popover Tooltips</h3>

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb align-items-center mb-0 lh-1">
                                <li class="breadcrumb-item">
                                    <a href="#" class="d-flex align-items-center text-decoration-none">
                                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                                        <span class="text-secondary fw-medium hover">Dashboard</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">UI Elements</span>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">Popover Tooltips</span>
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <h4 class="fs-18 mb-4">Tooltips</h4>
                                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="preview-tab" data-bs-toggle="tab" data-bs-target="#preview-tab-pane" type="button" role="tab" aria-controls="preview-tab-pane" aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="code-tab" data-bs-toggle="tab" data-bs-target="#code-tab-pane" type="button" role="tab" aria-controls="code-tab-pane" aria-selected="false">Code</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel" aria-labelledby="preview-tab" tabindex="0">
                                            <div class="d-flex gap-2 flex-wrap">
                                                <button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                    Tooltip on top
                                                </button>
                                                <button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">
                                                    Tooltip on right
                                                </button>
                                                <button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
                                                    Tooltip on bottom
                                                </button>
                                                <button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">
                                                    Tooltip on left
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="code-tab-pane" role="tabpanel" aria-labelledby="code-tab" tabindex="0">
                                            <button class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0" data-clipboard-target="#basicAlertsCode">
                                                Copy
                                            </button>
<pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode">
&lt;button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"&gt;
    Tooltip on top
&lt;/button&gt;
&lt;button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right"&gt;
    Tooltip on right
&lt;/button&gt;
&lt;button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom"&gt;
    Tooltip on bottom
&lt;/button&gt;
&lt;button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left"&gt;
    Tooltip on left
&lt;/button&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <h4 class="fs-18 mb-4">Custom tooltip</h4>
                                    <ul class="nav nav-tabs mb-4" id="myTab2" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="preview2-tab" data-bs-toggle="tab" data-bs-target="#preview2-tab-pane" type="button" role="tab" aria-controls="preview2-tab-pane" aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="code2-tab" data-bs-toggle="tab" data-bs-target="#code2-tab-pane" type="button" role="tab" aria-controls="code2-tab-pane" aria-selected="false">Code</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane fade show active" id="preview2-tab-pane" role="tabpanel" aria-labelledby="preview2-tab" tabindex="0">
                                            <button type="button" class="btn btn-primary py-2 px-3 text-white"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="This top tooltip is themed via CSS variables.">
                                                Custom tooltip
                                            </button>
                                        </div>
                                        <div class="tab-pane fade" id="code2-tab-pane" role="tabpanel" aria-labelledby="code2-tab" tabindex="0">
                                            <button class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0" data-clipboard-target="#basicAlertsCode2">
                                                Copy
                                            </button>
<pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode2">
&lt;div class="tab-pane fade show active" id="preview2-tab-pane" role="tabpanel" aria-labelledby="preview2-tab" tabindex="0"&gt;
    &lt;button type="button" class="btn btn-primary py-2 px-3 text-white"
        data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        data-bs-title="This top tooltip is themed via CSS variables."&gt;
        Custom tooltip
    &lt;/button&gt;
&lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <h4 class="fs-18 mb-4">Four directions</h4>
                                    <ul class="nav nav-tabs mb-4" id="myTab3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="preview3-tab" data-bs-toggle="tab" data-bs-target="#preview3-tab-pane" type="button" role="tab" aria-controls="preview3-tab-pane" aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="code3-tab" data-bs-toggle="tab" data-bs-target="#code3-tab-pane" type="button" role="tab" aria-controls="code3-tab-pane" aria-selected="false">Code</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent3">
                                        <div class="tab-pane fade show active" id="preview3-tab-pane" role="tabpanel" aria-labelledby="preview3-tab" tabindex="0">
                                            <div class="d-flex gap-2 flex-wrap">
                                                <button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                                                    Popover on top
                                                </button>
                                                <button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                                                    Popover on right
                                                </button>
                                                <button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                                                    Popover on bottom
                                                </button>
                                                <button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
                                                    Popover on left
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="code3-tab-pane" role="tabpanel" aria-labelledby="code3-tab" tabindex="0">
                                            <button class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0" data-clipboard-target="#basicAlertsCode3">
                                                Copy
                                            </button>
<pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode3">
&lt;button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover"&gt;
    Popover on top
&lt;/button&gt;
&lt;button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover"&gt;
    Popover on right
&lt;/button&gt;
&lt;button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover"&gt;
    Popover on bottom
&lt;/button&gt;
&lt;button type="button" class="btn btn-primary text-white fw-semibold py-2 px-3" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover"&gt;
    Popover on left
&lt;/button&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <h4 class="fs-18 mb-4">Dismiss on next click</h4>
                                    <ul class="nav nav-tabs mb-4" id="myTab4" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="preview4-tab" data-bs-toggle="tab" data-bs-target="#preview4-tab-pane" type="button" role="tab" aria-controls="preview4-tab-pane" aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="code4-tab" data-bs-toggle="tab" data-bs-target="#code4-tab-pane" type="button" role="tab" aria-controls="code4-tab-pane" aria-selected="false">Code</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent4">
                                        <div class="tab-pane fade show active" id="preview4-tab-pane" role="tabpanel" aria-labelledby="preview4-tab" tabindex="0">
                                            <a tabindex="0" class="btn btn-lg btn-danger text-white py-2 px-3" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                                        </div>
                                        <div class="tab-pane fade" id="code4-tab-pane" role="tabpanel" aria-labelledby="code4-tab" tabindex="0">
                                            <button class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0" data-clipboard-target="#basicAlertsCode4">
                                                Copy
                                            </button>
<pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode4">
&lt;a tabindex="0" class="btn btn-lg btn-danger text-white py-2 px-3" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Dismissible popover&lt;/a&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="flex-grow-1"></div>

				<!-- Start Footer Area -->
				@include('partials.footer')
				<!-- End Footer Area -->
			</div>
		</div>

        
        @include('partials.theme_settings')
        @include('partials.scripts')
    </body>
</html>
