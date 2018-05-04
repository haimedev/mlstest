<div id="menu_div">
	<label><b>Pages</b>	&nbsp&nbsp&nbsp&nbsp<label id="page_arw">^</label></label>
	<hr>
	<form method="post" action="HomeController.php" id="menuItem_frm">
		<table id="menu_tbl">
			<tr>
				<td>
					<img src="../View/image/file_logo.png"/>
					<label class="menu_cls" id="clientAccount">Client Account</label>
					<table id="clientAccountSubMenu_tbl">
						<tr>
							<td style="padding-left: 30px;">
								<label class="menuItem_cls" id="manageClient_subMenu">Manage</label>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 30px;">
								<label class="menuItem_cls" id="chartOfAccount_subMenu">Chart of Account</label>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 30px;">
								<label class="menuItem_cls" id="generalLedger_subMenu">General Ledger</label>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<img src="../View/image/file_logo.png"/>
					<label class="menu_cls" id="transaction">Transaction</label>
					<table id="transactionSubMenu_tbl">
						<tr>
							<td style="padding-left: 30px;">
								<label  class="menuItem_cls" id="borrow_subMenu">Borrow</label>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 30px;">
								<label class="menuItem_cls" id="payment_subMenu">Payment</label>
							</td>
						</tr>
					</table>
				<input type="hidden" name="paramMenuItem"  id="paramMenuItem" value="transactionsss">
				</td>
			</tr>
			<tr>
				<td>
					<img src="../View/image/file_logo.png"/>
					<label class="menu_cls" id="report">Report</label>
					<table id="reportSubMenu_tbl">
						<tr>
							<td style="padding-left: 30px;">
								<label class="menuItem_cls" id="transactionHistory_subMenu">Transaction History</label>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 30px;">
								<label class="menuItem_cls" id="accountBalance_subMenu">Account Balance</label>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 30px;">
								<label class="menuItem_cls" id="loanDetails_subMenu">Loan Details</label>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<img src="../View/image/file_logo.png"/>
					<label class="menu_cls" id="adminAccount">Admin Account</label>
					<table id="adminAccountSubMenu_tbl">
						<tr>
							<td style="padding-left: 30px;">
								<label class="menuItem_cls" id="adminManage_subMenu">Manage</label>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 30px;">
								<label class="menuItem_cls" id="roles_subMenu">Roles</label>
							</td>
						</tr>
						<tr>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</div>