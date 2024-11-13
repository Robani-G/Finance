@include('layouts.Head')
@include('layouts.Header')
@include('layouts.Side_Bar')

<div class="page-body">
    <div class="container-fluid">
    <div class="page-title">
        <div class="row">
        <div class="col-6">
            <h4>Letter Box</h4>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">
                <svg class="stroke-icon">
                    <use href="  #stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item">Email</li>
            <li class="breadcrumb-item active"> Letter Box</li>
            </ol>
        </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
    <div class="email-wrap email-main-wrapper">
        <div class="row">
        <div class="col-xxl-3 col-xl-4 box-col-12">
            <div class="md-sidebar"> <a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">email filter</a>
            <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                <div class="email-left-aside">
                <div class="card">
                    <div class="card-body">
                    <div class="email-app-sidebar">
                        <a href="{{ route('Admin.Files.Send') }}" class="nav-link ">
                            <button class="btn btn-primary emailbox" type="button" ><i class="fa fa-plus"></i>Compose Email</button>
                        </a>
                        <ul class="nav nav-pills main-menu email-category" id="email-pills-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="inbox-pill-tab" data-bs-toggle="pill" href="#inbox-pill" role="tab" aria-controls="inbox-pill" aria-selected="false">
                            <svg class="stroke-icon">
                                <use href="  #inbox"></use>
                            </svg>
                            <div>Inbox<span class="badge">12</span></div></a></li>
                        <li class="nav-item"><a class="nav-link" id="sent-pill-tab" data-bs-toggle="pill" href="#sent-pill" role="tab" aria-controls="sent-pill" aria-selected="false">
                            <svg class="stroke-icon">
                                <use href="  #sent"></use>
                            </svg>Sent</a></li>

                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xxl-9 col-xl-8 box-col-12">
            <div class="email-right-aside">
            <div class="card email-body email-list">
                <div class="mail-header-wrapper">
                <div class="mail-header">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label" for="emailCheckboxA"></label>
                    <ul class="email-tabs nav" role="tablist">
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#!" role="tab" aria-selected="true" disabled>
                            <svg class="stroke-icon">
                            <use href="  #mail"></use>
                            </svg><span class="f-w-600"> </span></a></li>
                    </ul>
                    </div>
                </div>
                <div class="mail-body">
                    <div class="mail-search d-flex-align-items-center">
                    <input class="form-control" type="text" placeholder="Search..."><i class="fa fa-search"></i>
                    </div>
                    <div class="light-square"><i class="fa fa-refresh"></i></div>
                    <div class="light-square"> <i class="fa fa-trash"></i></div>
                    <div class="light-square dropdown-toggle" role="main" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></div>
                    <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                    <li> <a class="dropdown-item" href="#!">All</a></li>
                    <li> <a class="dropdown-item" href="#!">None</a></li>
                    <li> <a class="dropdown-item" href="#!">Read</a></li>
                    <li> <a class="dropdown-item" href="#!">Unread</a></li>
                    </ul>
                </div>
                </div>
                <div class="modal fade" id="compose_mail" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5">Compose Message</h3>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body compose-modal">
                        <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="composeFrom">From :</label>
                            <div class="col-sm-10">
                            <input class="form-control" id="composeFrom" type="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="composeTo">To :</label>
                            <div class="col-sm-10">
                            <input class="form-control" id="composeTo" type="email">
                            <div class="add-bcc">
                                <div class="d-flex gap-2"><a class="btn" data-bs-toggle="collapse" href="#collapseCc" role="button" aria-expanded="false" aria-controls="collapseCc">Cc </a><a class="btn" data-bs-toggle="collapse" href="#collapseBcc" role="button" aria-expanded="false" aria-controls="collapseBcc">Bcc</a></div>
                            </div>
                            </div>
                        </div>
                        <div class="collapse row mb-3" id="collapseCc">
                            <label class="col-sm-2 col-form-label" for="composeCc">Cc:</label>
                            <div class="col-sm-10">
                            <input class="form-control" id="composeCc" type="email">
                            </div>
                        </div>
                        <div class="collapse row mb-3" id="collapseBcc">
                            <label class="col-sm-2 col-form-label" for="composeBcc">Bcc:</label>
                            <div class="col-sm-10">
                            <input class="form-control" id="composeBcc" type="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="composeSubject">Subject :</label>
                            <div class="col-sm-10">
                            <input class="form-control" id="composeSubject" type="email">
                            </div>
                        </div>
                        <div class="toolbar-box">
                            <div id="toolbar1">
                            <button class="ql-bold">Bold </button>
                            <button class="ql-italic">Italic </button>
                            <button class="ql-underline">underline</button>
                            <button class="ql-strike">Strike </button>
                            <button class="ql-list" value="ordered">List </button>
                            <button class="ql-list" value="bullet"> </button>
                            <button class="ql-indent" value="-1"> </button>
                            <button class="ql-indent" value="+1"></button>
                            <button class="ql-link"></button>
                            <button class="ql-image"></button>
                            </div>
                            <div id="editor1"></div>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light" type="button">Save as draft</button>
                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Send</button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="tab-content" id="email-pills-tabContent">
                <div class="tab-pane fade show active" id="inbox-pill" role="tabpanel" aria-labelledby="inbox-pill-tab">
                    <div class="mail-body-wrapper">
                    <ul id="paginated-list" data-current-page="1" aria-live="polite">

                        @foreach ($Received_Files as $Received_File)
                            <li class="inbox-data">
                                <div class="inbox-user">
                                    <div class="form-check form-check-inline m-0">
                                    <input class="form-check-input checkbox-primary" id="emailCheckboxB" type="checkbox" value="option1">
                                    <label class="form-check-label" for="emailCheckboxB"></label>
                                    </div>
                                    <svg class="important-mail active">
                                    <use href="  #fill-star"></use>
                                    </svg>
                                    <div class="rounded-border"><img class="img-fluid" src="../assets/images/dashboard/user/6.jpg" alt="user"></div>
                                    <p>{{ $Received_File->UserId->name }}</p>
                                </div>
                                <div class="inbox-message">
                                    <div class="email-data"><span>New comments on MSR2024 draft presentation - <span>New Here's a list of all the topic challenges...</span></span>
                                    <div class="badge badge-light-primary">{{$Received_File->file_name}}</div>
                                    </div>
                                    <div class="email-timing"><span>2:30 PM</span></div>
                                    <div class="email-options"><i class="fa fa-envelope-o envelope-1 show"></i><i class="fa fa-envelope-open-o envelope-2 hide"></i><i class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i></div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    </div>
                    <div class="mail-pagination">
                    <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">&lt;</button>
                    <div class="pagination-index" id="pagination-numbers"></div>
                    <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">&gt;</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="sent-pill" role="tabpanel" aria-labelledby="sent-pill-tab">
                    <div class="mail-body-wrapper">
                    <ul>
                        @foreach ($Sent_Files as $Sent_File)
                            <li class="inbox-data">
                                <div class="inbox-user">
                                    <div class="form-check form-check-inline m-0">
                                    <input class="form-check-input checkbox-primary" id="emailCheckboxN" type="checkbox" value="option1">
                                    <label class="form-check-label" for="emailCheckboxN"></label>
                                    </div>
                                    <svg class="important-mail">
                                    <use href="  #fill-star"></use>
                                    </svg>
                                    <div class="rounded-border"><img class="img-fluid" src="{{ asset('assets/images/user.png') }}" alt="user"></div>
                                    <p>{{ $Sent_File->SharedToUser->name }}</p>
                                </div>
                                <div class="inbox-message">
                                    <div class="email-data"><span>Confirm your booking id -<span> A collection of textile samples lay spread out on the table - Samsa was a travelling salesman..</span></span>
                                    <div class="badge badge-light-primary">{{$Sent_File->file_name}}</div>
                                    </div>
                                    <div class="email-timing"><span>7:50 AM</span></div>
                                    <div class="email-options"><i class="fa fa-envelope-o envelope-1 show"></i><i class="fa fa-envelope-open-o envelope-2 hide"></i><i class="fa fa-trash-o trash-3"></i><i class="fa fa-print"></i></div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="card email-body email-read">
                <div class="mail-header-wrapper header-wrapper1">
                <div class="mail-header1">
                    <div class="light-square">
                    <svg style="display: none;">
                        <symbol xmlns="http://www.w3.org/2000/svg" id="back-arrow" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.4" d="M4.25 12.2744L19.25 12.2744" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </symbol>
                    </svg>
                    <svg class="btn-email" width="24" height="24">
                        <use href="#back-arrow"></use>
                    </svg>
                    </div><span class="f-w-600">Interview Mail</span>
                </div>
                <div class="mail-body1">
                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Trash">
                    <svg style="display: none;">
                        <symbol id="mail-trash" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0397 4.9901C15.7069 4.65376 12.3436 4.4856 8.99554 4.4856C7.00812 4.4856 5.0207 4.59261 3.04857 4.79135L1 4.9901" stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6.51855 3.98113L6.73258 2.66637C6.88546 1.71852 7.00775 1 8.70471 1H11.3342C13.0312 1 13.1535 1.7491 13.3063 2.66637L13.5204 3.96585" stroke-opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M16.8839 5.1123L16.2265 15.2024C16.1195 16.7769 16.0278 18 13.2301 18H6.79393C3.99626 18 3.90452 16.7769 3.7975 15.2024L3.14014 5.1123" stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </symbol>
                    </svg>
                    <svg class="stroke-danger" width="24" height="24">
                        <use href="#mail-trash"></use>
                    </svg>
                    </div>
                </div>
                </div>
                <div class="mail-body-wrapper">
                <div class="user-mail-wrapper">
                    <div class="user-title">
                    <div>
                        <div class="rounded-border"> <img class="img-fluid" src="../assets/images/user/12.png" alt="user"></div>
                        <div class="dropdown-subtitle">
                        <p>Jacob Jones</p>
                        <div class="onhover-dropdown">
                            <button class="btn p-0 dropdown-button">To me <i data-feather="chevron-down"> </i></button>
                            <div class="inbox-security onhover-show-div">
                            <p>From: <span>jones &lt;jacobjones3@gmail.com&gt;</span></p>
                            <p>to: <span>donut.horry@gmail.com</span></p>
                            <p>reply-to:<span>&lt;jacobjones3@gmail.com&gt;</span></p>
                            <p>date: <span>Jul 13, 2024, 7:10 AM</span></p>
                            <p>subject: <span>Important Account Security Update</span></p>
                            <p>security: <span>standard encryption (TLS)</span></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="inbox-options"> <span>Friday 07 Apr (4 hours ago)</span>
                        <div class="light-square" onclick="myFunction()">
                        <svg style="display: none;">
                            <symbol id="print" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M7.25 7H16.75V5C16.75 3 16 2 13.75 2H10.25C8 2 7.25 3 7.25 5V7Z" stroke="#52526C" stroke-opacity="0.8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M16 15V19C16 21 15 22 13 22H11C9 22 8 21 8 19V15H16Z" stroke="#52526C" stroke-opacity="0.8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M21 10V15C21 17 20 18 18 18H16V15H8V18H6C4 18 3 17 3 15V10C3 8 4 7 6 7H18C20 7 21 8 21 10Z" stroke="#52526C" stroke-opacity="0.8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M17 15H15.79H7" stroke="#52526C" stroke-opacity="0.8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path opacity="0.4" d="M7 11H10" stroke="#52526C" stroke-opacity="0.8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            </symbol>
                        </svg>
                        <svg class="btn-print" width="24" height="24">
                            <use href="#print"></use>
                        </svg>
                        </div>
                    </div>
                    </div>
                    <div class="user-body">
                    <p>Dear Customer,</p>
                    <p>We regret to notify you that an unauthorized attempt was made to access your account. Our system discovered suspicious activity, and we acted right away to safeguard your personal data.</p>
                    <p>Please change your login information by clicking the following link in order to safeguard your account:</p>
                    <p>Please be aware that your account may be temporarily suspended if no action is taken within 24 hours. We urge you to take immediate action to prevent any inconvenience.</p>
                    <p>We sincerely apologize for any inconvenience this may cause and thank you for your immediate attention to this matter.</p>
                    <div class="mail-subcontent">
                        <p>Yours faithfully,</p>
                        <p>Account Security Team</p>
                    </div>
                    </div>
                    <div class="user-footer">
                    <div>
                        <svg style="display: none;">
                            <symbol id="attachment" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.2749 10.1251L8.21657 12.1834C7.0749 13.3251 7.0749 15.1667 8.21657 16.3084C9.35824 17.4501 11.1999 17.4501 12.3416 16.3084L15.5832 13.0667C17.8582 10.7917 17.8582 7.09172 15.5832 4.81672C13.3082 2.54172 9.60824 2.54172 7.33324 4.81672L3.7999 8.35006C1.8499 10.3001 1.8499 13.4667 3.7999 15.4251" stroke="#52526C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </symbol>
                        </svg>
                        <svg class="btn-attachment" width="24" height="24">
                            <use href="#attachment"></use>
                        </svg>
                        <span class="f-light">Attachments</span>
                    </div>
                    <div class="d-inline-block">
                        <div class="attchment-file common-flex">
                        <div class="common-flex align-items-center"><img src="../assets/images/email-template/pdfs.png" alt="pdf">
                            <div class="d-block">
                            <p>Offer_Letter.pdf</p>
                            <p>200KB</p>
                            </div>
                        </div><a href="https://admin.pixelstrap.net/riho/assets/pug/pages/template/text_file.txt" download> <i class="fa fa-download f-light"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

@include('layouts.Footer')
