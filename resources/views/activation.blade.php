<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Makanumber</title>
		<link rel="stylesheet" href="https//live.makanumber.com/vendor/core/core/base/css/email.css">
	</head>
	<body style="margin: 0;">
		<table width="100%" id="mainStructure" border="0" cellspacing="0" cellpadding="0"
			style="background-color:#e1e1e1 ;border-spacing: 0;">
			<!-- START TAB TOP -->
			<tbody>
				<tr>
					<td valign="top" style="border-collapse: collapse;">
						<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;">
							<tbody>
								<tr>
									<td valign="top" height="6" style="border-collapse: collapse;">
										<table width="800" align="center" border="0" cellspacing="0" cellpadding="0" class="full-width"
											style="border-spacing: 0;">
											<!-- start space height -->
											<tbody>
												<tr>
													<td height="5" valign="top" style="border-collapse: collapse;"></td>
												</tr>
												<!-- end space height -->
												<tr>
													<td height="5" class="remove" style="border-collapse: collapse;"></td>
												</tr>
												<!-- start space height -->
												<tr>
													<td height="5" valign="top" style="border-collapse: collapse;"></td>
												</tr>
												<tr>
													<td height="5" class="remove" style="border-collapse: collapse;"></td>
												</tr>
												<!-- end space height -->
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<!-- END TAB TOP -->
				<!--START TOP NAVIGATION ?LAYOUT-->
				<tr>
					<td align="center" valign="top" class="fix-box" style="border-collapse: collapse;">
						<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" class="full-width"
							style="border-spacing: 0;">
							<!-- START CONTAINER NAVIGATION -->
							<tbody>
								<tr>
									<td valign="middle" style="border-collapse: collapse;">
										<!-- start top navigation container -->
										<table width="800" align="center" border="0" cellspacing="0" cellpadding="0" class="full-width"
											style="border-spacing: 0;">
											<tbody>
												<tr>
													<td valign="middle" bgcolor="3A3A3A" style="border-collapse: collapse;">
														<!-- start top navigation -->
														<table width="800" align="center" border="0" cellspacing="0" cellpadding="0"
															class="full-width" style="border-spacing: 0;">
															<tbody>
																<tr>
																	<td valign="middle" style="border-collapse: collapse;">
																		<table border="0" align="left" cellpadding="0" cellspacing="0"
																			class="container2" style="border-spacing: 0;">
																			<tbody>
																				<!--start event date -->
																				<tr>
																					<td valign="middle" align="center"
																						style="border-collapse: collapse;">
																						<table align="right" border="0" cellpadding="0"
																							cellspacing="0" class="clear-align"
																							style="border-spacing: 0;">
																							<tbody>
																								<tr>
																									<td style="padding:15px;border-collapse:collapse; height: 100px; line-height: 70px">
																										<a href="site_url" style="color: #fff; text-decoration: none !important;"
																											target="_blank">
																										<img title="Logo"
																											src="https://live.makanumber.com/frontend-images/email-logo.png"
																											height="100"
																											style="max-width: 200px;display: block !important;height: auto !important;"
																											alt="Logo" border="0"
																											hspace="0"
																											vspace="0"></a>
																									</td>
																								</tr>
																							</tbody>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																		<!--end content nav -->
																		<!--start content nav -->
																		<table border="0" align="right" cellpadding="0" cellspacing="0"
																			class="container2" style="border-spacing: 0;">
																			<tbody>
																				<!--start event date -->
																				<tr>
																					<td valign="middle" align="center"
																						style="border-collapse: collapse;">
																						<table align="right" border="0" cellpadding="0"
																							cellspacing="0" class="clear-align"
																							style="border-spacing: 0;">
																							<tbody>
																								<tr>
																									<td style="font-size: 13px;line-height: 22px;color: #fff;padding: 15px;font-weight: normal;text-align: center;font-family: Tahoma, Helvetica, Arial, sans-serif;border-collapse: collapse;"><span style="display: inline-block; height: 100px; line-height: 100px;">{{ $date_time }}</span></td>
																								</tr>
																							</tbody>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																		<!--end content nav -->
																	</td>
																</tr>
															</tbody>
														</table>
														<!-- end top navigation -->
													</td>
												</tr>
											</tbody>
										</table>
										<!-- end top navigation container -->
									</td>
								</tr>
								<!-- END CONTAINER NAVIGATION -->
							</tbody>
						</table>
					</td>
				</tr>
				<!--END TOP NAVIGATION LAYOUT-->
				<!-- START MAIN CONTENT-->
				<tr>
					<td align="center" valign="top" class="fix-box" style="border-collapse: collapse;">
						<!-- start layout-7 container -->
						<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" class="full-width"
							style="border-spacing: 0;">
							<tbody>
								<tr>
									<td valign="top" style="border-collapse: collapse;">
										<table width="800" align="center" border="0" cellspacing="0" cellpadding="0" class="container"
											bgcolor="#ffffff" style="background-color: #ffffff;border-spacing: 0;">
											<!--start space height -->
											<tbody>
												<tr>
													<td height="30" style="border-collapse: collapse;"></td>
												</tr>
												<!--end space height -->
												<tr>
													<td style="min-height: 400px; padding: 15px; font-size: 13px;">
                            <strong>Hello {{ $name }},</strong> <br /><br />
                            We would like to thank you for choosing Makanumber.com <br>
                            Please click on the link below to activate your account and get started.
														<br />
														<br />
														<br />
                            <a href="{{ $body }}" target="_blank">Click To Activation</a>
														<br />
														<br />
                            <p style="position:relative">Want to know more about
                              <a href="www.makanumber.com" style="color: #fff; text-decoration: none !important;"
                                target="_blank"> 
                              <img title="Logo"
                              src="https://live.makanumber.com/frontend-images/logo.png"
                              height="40"
                              style="padding-left: 5px; position:absolute; top: 0; max-width: 100px;display: inline-block !important;height: auto !important;"
                              alt="Logo" border="0"
                              hspace="0"
                              vspace="0">
                              </a>
                            </p>
														<br />
                            Visit <a href="www.makanumber.com">www.makanumber.com</a>
                            <p>Thankyou for your time.</p>
                            Regards, <br />
                            Team MKNB
                          </td>
												</tr>
												<!--start space height -->
												<tr>
													<td height="28" style="border-collapse: collapse;"></td>
												</tr>
												<!--end space height -->
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
						<!-- end layout-7 container -->
					</td>
				</tr>
				<!-- END MAIN CONTENT-->
				<!-- START FOOTER-BOX-->
				<tr>
					<td align="center" valign="top" class="fix-box" style="border-collapse: collapse;">
						<!-- start layout-7 container -->
						<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" class="full-width"
							style="border-spacing: 0;">
							<tbody>
								<tr>
									<td valign="top" style="border-collapse: collapse;">
										<table width="800" align="center" border="0" cellspacing="0" cellpadding="0" class="full-width"
											bgcolor="#3a3a3a" style="border-spacing: 0;">
											<!--start space height -->
											<tbody>
												<tr>
													<td height="20" style="border-collapse: collapse;"></td>
												</tr>
												<!--end space height -->
												<tr>
													<td valign="top" align="center" style="border-collapse: collapse;">
														<!-- start logo footer and address -->
														<table width="760" align="center" border="0" cellspacing="0" cellpadding="0"
															class="container" style="border-spacing: 0;">
															<tbody>
																<tr>
																	<td valign="top" style="border-collapse: collapse;">
																		<!--start icon navigation -->
																		<table width="100%" border="0" align="center" cellpadding="0"
																			cellspacing="0" style="border-spacing: 0;">
																			<tbody>
																				<tr>
																					<td valign="top" align="center"
																						style="border-collapse: collapse;">
																						<table width="100%" border="0" align="left" cellpadding="0"
																							cellspacing="0" class="full-width"
																							style="border-spacing: 0;">
																							<tbody>
																								<tr>
																									<td align="left" valign="middle"
																										class="clear-padding"
																										style="border-collapse: collapse;">
																										<table width="760" border="0" align="left"
																											cellpadding="0" cellspacing="0"
																											class="col-2" style="border-spacing: 0;">
																											<tbody>
																												<tr>
																													<td height="10"
																														style="border-collapse: collapse;"></td>
																												</tr>
																												<tr>
																													<td style="font-size: 13px;line-height: 15px; text-align: center; font-family: Arial,Tahoma, Helvetica, sans-serif;color: #a7a9ac;font-weight: normal;border-collapse: collapse;">
																														© Copyright {{ date("Y"); }} . All rights reserved.
																													</td>
																												</tr>
																											</tbody>
																										</table>
																									</td>
																								</tr>
																							</tbody>
																						</table>
																						<!-- end logo footer and address -->
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<!--start space height -->
																<tr>
																	<td height="20" style="border-collapse: collapse;"></td>
																</tr>
																<!--end space height -->
															</tbody>
														</table>
													</td>
												</tr>
												<!-- start space height -->
												<tr>
													<td height="10" valign="top" style="border-collapse: collapse;"></td>
												</tr>
												<!-- end space height -->
											</tbody>
										</table>
										<!-- end layout-FOOTER-BOX container -->
									</td>
								</tr>
								<!-- END FOOTER-BOX-->
								<!-- START FOOTER COPY RIGHT  -->
								<tr>
									<td align="center" valign="top" class="fix-box" style="border-collapse: collapse;">
										<!-- start layout-7 container -->
										<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" class="full-width"
											style="border-spacing: 0;">
											<!-- start space height -->
											<tbody>
												<tr>
													<td height="5" valign="top" style="border-collapse: collapse;"></td>
												</tr>
												<!-- end space height -->
												<tr>
													<td align="center" valign="top" style="border-collapse: collapse;">
														<table width="800" align="center" border="0" cellspacing="0" cellpadding="0"
															class="container" style="border-spacing: 0;">
															<tbody>
																<tr>
																	<td valign="top" align="center" style="border-collapse: collapse;">
																		<table width="560" align="center" border="0" cellspacing="0"
																			cellpadding="0" class="container" style="border-spacing: 0;">
																			<tbody>
																				<tr>
																					<!-- start COPY RIGHT content -->
																					<td valign="top" align="center"
																						style="font-size: 11px;line-height: 22px;font-family: Arial,Tahoma, Helvetica, sans-serif;color: #919191;font-weight: normal;border-collapse: collapse;">
																						Email is sent from makanumber.
																					</td>
																					<!-- end COPY RIGHT content -->
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
												<!--  END FOOTER COPY RIGHT -->
												<!-- start space height -->
												<tr>
													<td height="20" valign="top" style="border-collapse: collapse;"></td>
												</tr>
												<!-- end space height -->
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>