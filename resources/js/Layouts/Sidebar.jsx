import React, { useEffect } from "react";
import { Link, usePage } from "@inertiajs/inertia-react";
import PerfectScrollbar from "perfect-scrollbar";
import { FiActivity, FiInbox, FiMonitor } from "react-icons/fi";
import { FcApproval } from "react-icons/fc";
import { VscGithubInverted } from "react-icons/vsc";

function Sidebar({ route }) {
	const { auth } = usePage().props;
	useEffect(() => {
		new PerfectScrollbar(document.querySelector('#sidenav-main'));
		new PerfectScrollbar(document.querySelector('#sidenav-collapse-main'));
	}), [];

    return (
        <>
            <aside className="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
				<div className="sidenav-header">
					<i className="ni ni-fat-remove p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
					<div className="navbar-brand d-flex gap-2 align-items-center m-0">
						<img src="/icon.png" className="navbar-brand-img h-100" alt="main_logo"/>
						<div>
							<span className="font-weight-bold">
								{auth.user.name}
								{(auth.user.role=='developer') && (
									<a href="https://github.com/asepnurjaman-en" target="_BLANK">
										<VscGithubInverted title="You`re Developer" className="ms-1"/>
									</a>
								)}
								<FcApproval title="Verified account" className="ms-1"/>
								<small className="text-muted text-xxs d-block">{auth.user.email}</small>
							</span>
						</div>
					</div>
				</div>
				<div className="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
					<ul className="navbar-nav">
						<li className="nav-item">
							<Link className={ `nav-link ` + ((['dashboard.index'].includes(route)) ? `active` : null) } href="/dashboard/">
								<div className="icon icon-shape icon-md border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
									<FiMonitor className="fs-1 text-success"/>
								</div>
								<span className="nav-link-text ms-2">Dashboard</span>
							</Link>
						</li>
						{(function() {
							if (auth.user.role=='developer' || auth.user.role=='admin') {
								return (
								<>
									<li className="my-2 border-bottom"></li>
								</>
								);
							} else if (auth.user.role=='user') {
								return (
									<>
										<li className="my-2 border-bottom"></li>
										<li className="nav-item">
											<Link className={ `nav-link ` + ((['hafalan-quran.juz', 'hafalan-quran.surah', 'hafalan-quran.hafalan-quran.surah'].includes(route)) ? `active` : null) } href="/u/hafalan-quran/surah">
												<div className="icon icon-shape icon-md border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
													<FiActivity className="fs-1 text-success"/>
												</div>
												<span className="nav-link-text ms-2">Hafalan Quran</span>
											</Link>
										</li>
									</>
								);
							}
						})()}
					</ul>
				</div>
			</aside>
        </>
    )
}

export default Sidebar