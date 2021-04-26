<?php
/* webERP menus with Captions and URLs */

$ModuleLink = array('Sales', 'AR', 'PO', 'AP', 'stock', 'manuf', 'GL', 'FA', 'PC', 'system', 'Utilities');
$ReportList = array('Sales' => 'ord', 'AR' => 'ar', 'PO' => 'prch', 'AP' => 'ap', 'stock' => 'inv', 'manuf' => 'man', 'GL' => 'gl', 'FA' => 'fa', 'PC' => 'pc', 'system' => 'sys', 'Utilities' => 'utils');

/*The headings showing on the tabs across the main index used also in WWW_Users for defining what should be visible to the user */
$ModuleList = array(_('Ventas'), _('Cobros'), _('Compras'), _('Pagos'), _('Inventario'), _('Produccion'), _('Contabilidad'), _('Gestor de activos'), _('Caja chica'), _('Configuracion'), _('Utilidades'));

$MenuItems['Sales']['Transactions']['Caption'] = array(_('Nueva orden de venta o cotizacion'), _('Introducir ventas de mostrador'), _('Ingresar devolucion por mostrador'), _('Generate/Print Picking Lists'), _('Pedidos de venta/cotizaciones pendientes'), _('Pedidos especiales'), _('Plantilla para pedidos frecuentes'), _('Procesar pedidos frecuentes'), _('Maintain Picking Lists'));
$MenuItems['Sales']['Transactions']['URL'] = array('/SelectOrderItems.php?NewOrder=Yes', '/CounterSales.php', '/CounterReturns.php', '/GeneratePickingList.php', '/SelectSalesOrder.php', '/SpecialOrder.php', '/SelectRecurringSalesOrder.php', '/RecurringSalesOrdersProcess.php', '/SelectPickingLists.php');

$MenuItems['Sales']['Reports']['Caption'] = array(_('Consultar ordenes de venta'), _('Imprimir lista de precios'), _('Informe de estado de pedidos'), _('Informe de pedidos facturados'), _('Consulta ventas diarias'), _('Consulta venta por tipo de venta'), _('Consulta ventas por categoria'), _('Consultar ventas por categoria y por articulo'), _('Informes de analisis de ventas'), _('Graficas de ventas'), _('Consultar mejores vendidos'), _('Informe de diferencias de entrega de pedidos'), _('Informe de entregas DIFOT (Delivery In Full On Time'), _('Consultas detalladas o resumidas de ordenes de venta'), _('Consultar articulos mas vendidos'), _('Consultar mejores clientes'), _('Informe de articulos menos vendidos'), _('Informe de ventas con utilidad bruta baja'), _('Informe de reclamos de ventas apoyadas por el proveedor'), _('Ventas a clientes'));
$MenuItems['Sales']['Reports']['URL'] = array('/SelectCompletedOrder.php', '/PDFPriceList.php', '/PDFOrderStatus.php', '/PDFOrdersInvoiced.php', '/DailySalesInquiry.php', '/SalesByTypePeriodInquiry.php', '/SalesCategoryPeriodInquiry.php', '/StockCategorySalesInquiry.php', '/SalesAnalRepts.php', '/SalesGraph.php', '/SalesTopItemsInquiry.php', '/PDFDeliveryDifferences.php', '/PDFDIFOT.php', '/SalesInquiry.php', '/TopItems.php', '/SalesTopCustomersInquiry.php', '/NoSalesItems.php', '/PDFLowGP.php', '/PDFSellThroughSupportClaim.php', '/SalesReport.php');

$MenuItems['Sales']['Maintenance']['Caption'] = array(_('Agregar contrato'), _('Seleccionar contrato'), _('Acuerdo de ventas apoyadas por el proveedor'));
$MenuItems['Sales']['Maintenance']['URL'] = array('/Contracts.php', '/SelectContract.php', '/SellThroughSupport.php');

$MenuItems['AR']['Transactions']['Caption'] = array(_('Seleccionar pedido para facturar'), _('Crear una nota de credito (Abono)'), _('Introducir ingresos (cobros)'), _('Asignar recibos o notas de credito'));
$MenuItems['AR']['Transactions']['URL'] = array('/SelectSalesOrder.php', '/SelectCreditItems.php?NewCredit=Yes', '/CustomerReceipt.php?NewReceipt=Yes&amp;Type=Customer', '/CustomerAllocations.php');

$MenuItems['AR']['Reports']['Caption'] = array(_('Consultar donde esta asignado'), _('Imprimir facturas o notas de credito'), _('Imprimir estado de cuenta'), _('Informe de Saldos / Moras de clientes Antiguos (cartera sana y vencida)'), _('Reimprimir una lista de depósitos'), _('Saldo de clientes al final del mes previo'), _('Listado de clientes por zona/vendedor'), _('Lista de transacciones diarias'), _('Consultas de transacciones del cliente'), _('Actividad y saldos de cliente'));

if ($_SESSION['InvoicePortraitFormat'] == 0) {
	$PrintInvoicesOrCreditNotesScript = '/PrintCustTrans.php';
} else {
	$PrintInvoicesOrCreditNotesScript = '/PrintCustTransPortrait.php';
}

$MenuItems['AR']['Reports']['URL'] = array('/CustWhereAlloc.php', $PrintInvoicesOrCreditNotesScript, '/PrintCustStatements.php', '/AgedDebtors.php', '/PDFBankingSummary.php', '/DebtorsAtPeriodEnd.php', '/PDFCustomerList.php', '/PDFCustTransListing.php', '/CustomerTransInquiry.php', '/CustomerBalancesMovement.php');

$MenuItems['AR']['Maintenance']['Caption'] = array(_('Añadir cliente'), _('Seleccionar cliente'));
$MenuItems['AR']['Maintenance']['URL'] = array('/Customers.php', '/SelectCustomer.php');

$MenuItems['AP']['Transactions']['Caption'] = array(_('Selecionar proveedor'), _('Ubicacion de proveedores'));
$MenuItems['AP']['Transactions']['URL'] = array('/SelectSupplier.php', '/SupplierAllocations.php');

$MenuItems['AP']['Reports']['Caption'] = array(_('Consultar donde esta asignado'), _('Informe de proveedores antiguos'), _('Informe de Pagos al Corriente'), _('Avisos de remesa'), _('Informe de Remisiones (GRNs) Pendientes'), _('Saldo de proveedores al final del mes previo'), _('Lista de transacciones diarias'), _('Consulta de transacciones del proveedor'));
$MenuItems['AP']['Reports']['URL'] = array('/SuppWhereAlloc.php', '/AgedSuppliers.php', '/SuppPaymentRun.php', '/PDFRemittanceAdvice.php', '/OutstandingGRNs.php', '/SupplierBalsAtPeriodEnd.php', '/PDFSuppTransListing.php', '/SupplierTransInquiry.php');

$MenuItems['AP']['Maintenance']['Caption'] = array(_('Agregar proveedor'), _('Seleccionar proveedor'), _('Administrar Empresas Financieras'));
$MenuItems['AP']['Maintenance']['URL'] = array('/Suppliers.php', '/SelectSupplier.php', '/Factors.php');

$MenuItems['PO']['Transactions']['Caption'] = array(_('Nueva orden de compra'), _('Ordenes de compra'), _('Entrada en cuadricula de orden de compra.'), _('Crear una nueva licitacion'), _('Editar licitaciones existentes'), _('Procesar licitaciones y ofertas'), _('Ordenes a autorizar'), _('Ingreso de embarque'), _('Seleccionar un embarque'));
$MenuItems['PO']['Transactions']['URL'] = array('/PO_Header.php?NewOrder=Yes', '/PO_SelectOSPurchOrder.php', '/PurchaseByPrefSupplier.php', '/SupplierTenderCreate.php?New=Yes', '/SupplierTenderCreate.php?Edit=Yes', '/OffersReceived.php', '/PO_AuthoriseMyOrders.php', '/SelectSupplier.php', '/Shipt_Select.php');

$MenuItems['PO']['Reports']['Caption'] = array(_('Consultar ordenes de compra'), _('Consultar detalladas o resumidas de ordenes de compra'), _('Lista de precios del proveedor'), _('Compras con proveedores'));
$MenuItems['PO']['Reports']['URL'] = array('/PO_SelectPurchOrder.php', '/POReport.php', '/SuppPriceList.php', '/PurchasesReport.php');

$MenuItems['PO']['Maintenance']['Caption'] = array(_('Administrar lista de precios del proveedor'));
$MenuItems['PO']['Maintenance']['URL'] = array('/SupplierPriceList.php');

$MenuItems['stock']['Transactions']['Caption'] = array(_('Recibir ordenes de compra'), _('Traslado de inventario - Envio de articulo'), //"Inventory Transfer - Item Dispatch"
_('Traslado masivo de inventario') . ' - ' . _('Enviar'), //"Inventory Transfer - Bulk Dispatch"
_('Traslado masivo de inventario') . ' - ' . _('Recibir'), //"Inventory Transfer - Receive"
_('Ajustes de inventario'), _('Reversar Productos Recibidos'), _('Introducir Computos de Existencias'), _('Crear nueva Solicitud de Existencia Interna'), _('Autorizar las Solicitudes de Existencia Internas'), _('Cumplir con las solicitudes de Existencia Internas'));
$MenuItems['stock']['Transactions']['URL'] = array('/PO_SelectOSPurchOrder.php', '/StockTransfers.php?New=Yes', '/StockLocTransfer.php', '/StockLocTransferReceive.php', '/StockAdjustments.php?NewAdjustment=Yes', '/ReverseGRN.php', '/StockCounts.php', '/InternalStockRequest.php?New=Yes', '/InternalStockRequestAuthorisation.php', '/InternalStockRequestFulfill.php');

$MenuItems['stock']['Reports']['Caption'] = array(_('Herramienta de investigacion de articulo seriado'), _('Imprimir etiquetas de precio'), _('Reimprimir'), _('Movimientos de articulos de inventario'), _('Estado de articulos de inventario'), _('Uso de articulos de inventario'), _('Cantidades de Inventario'), _('Punto de pedido'), _('Despacho de Existencias'), _('Informe de valoracion de inventario'), _('Enviar informe de valuacion de inventario por correo'), _('Informe de Planificacion de Existencias'), _('Planificacion del Inventario en base a informacion del proveedor Preferido'), _('Hojas de Comprobacion de Existencias del Inventario'), _('Crear CSV con Cantidadesde Inventario'), _('Comparar Datos de Computos vs Comprobacion de Existencias'), _('Todos los Movimientos de Inventario por Ubicacion / Fecha'), _('Listar Estado del Inventario por Ubicacion / Categoria'), _('Historico de Cantidad de Existencias por  Ubicacion / Categoria'), _('Informe de Existencia en negativo'), _('Listado de Transacciones de Existencias por Periodo'), _('Nota de Transferencia de Existencias'), _('Informe de Inventario controlado AGED'), _('Internal stock request inquiry'));
$MenuItems['stock']['Reports']['URL'] = array('/StockSerialItemResearch.php', '/PDFPrintLabel.php', '/ReprintGRN.php', '/StockMovements.php', '/StockStatus.php', '/StockUsage.php', '/InventoryQuantities.php', '/ReorderLevel.php', '/StockDispatch.php', '/InventoryValuation.php', '/MailInventoryValuation.php', '/InventoryPlanning.php', '/InventoryPlanningPrefSupplier.php', '/StockCheck.php', '/StockQties_csv.php', '/PDFStockCheckComparison.php', '/StockLocMovements.php', '/StockLocStatus.php', '/StockQuantityByDate.php', '/PDFStockNegatives.php', '/PDFPeriodStockTransListing.php', '/PDFStockTransfer.php', '/AgedControlledInventory.php', '/InternalStockRequestInquiry.php');

$MenuItems['stock']['Maintenance']['Caption'] = array(_('Agregar un articulo nuevo'), _('Seleccionar un articulo'), _('Revisar descripciones traducidas'), _('Administrar categoria de ventas'), _('Administrar marcas'), _('Agregar o actualizar precios basados en costos'), _('Ver o Actualizar los Precios Basado en Costos'), _('Punto de pedido por Categoria / Ubicacion'));
$MenuItems['stock']['Maintenance']['URL'] = array('/Stocks.php', '/SelectProduct.php', '/RevisionTranslations.php', '/SalesCategories.php', '/Manufacturers.php', '/PricesBasedOnMarkUp.php', '/PricesByCost.php', '/ReorderLevelLocation.php');

$MenuItems['manuf']['Transactions']['Caption'] = array(_('Ingreso de ordenes de trabajo'), _('Seleccionar una orden de trabajo'), _('Muestras de control de calidad y resultados de pruebas'), _('Timesheet Entry'));
$MenuItems['manuf']['Transactions']['URL'] = array('/WorkOrderEntry.php', '/SelectWorkOrder.php', '/SelectQASamples.php', '/Timesheets.php');

$MenuItems['manuf']['Reports']['Caption'] = array(_('Seleccionar una orden de trabajo'), _('Consultar lista de materiales costeada'), _('Consultar donde se usa'), _('Informe de lista de materiales'), _('Informe de Lista de Materiales Identada'), _('Listado de componentes requeridos'), _('Lista de materiales no usados en ningun lugar'), _('Informe identado de Donde se Usaron'), _('Articulos de ordenes de trabajo listos para producir'), _('PRM (Planificacion de requerimientos de Materiales)'), _('PRM - Escasez'), _('PRM - Orden de compra sugeridas'), _('PRM Orden de Trabajo sugerida'), _('PRM Reprogramacion requerida'), _('Imprimir especificacion de producto'), _('Imprimir certificacion de analisis'), _('Resultados de pruebas de control de calidad historicas'), _('Consulta de costo total de varias ordenes de trabajo'));
$MenuItems['manuf']['Reports']['URL'] = array('/SelectWorkOrder.php', '/BOMInquiry.php', '/WhereUsedInquiry.php', '/BOMListing.php', '/BOMIndented.php', '/BOMExtendedQty.php', '/MaterialsNotUsed.php', '/BOMIndentedReverse.php', '/WOCanBeProducedNow.php', '/MRPReport.php', '/MRPShortages.php', '/MRPPlannedPurchaseOrders.php', '/MRPPlannedWorkOrders.php', '/MRPReschedules.php', '/PDFProdSpec.php', '/PDFCOA.php', '/HistoricalTestResults.php', '/CollectiveWorkOrderCost.php');

$MenuItems['manuf']['Maintenance']['Caption'] = array(_('Centro de trabajo'), _('Lista de materiales'), _('Copiar una lista de materiales entre articulos'), _('Programacion Maestra (Horario)'), _('Auto Crear Programacion Maestra'), _('PRM - Calculo'), _('Mantenimiento de pruebas de calidad'), _('Especificaciones de producto'), _('Employees'));
$MenuItems['manuf']['Maintenance']['URL'] = array('/WorkCentres.php', '/BOMs.php', '/CopyBOM.php', '/MRPDemands.php', '/MRPCreateDemands.php', '/MRP.php', '/QATests.php', '/ProductSpecs.php', '/Employees.php');

$MenuItems['GL']['Transactions']['Caption'] = array(_('Registrar egresos de cuenta bancaria'), _('Registrar ingresos a cuenta bancaria'), _('Importar transacciones bancarias'), _('Conciliar egresos de cuenta bancaria'), _('Conciliar ingresos a cuenta bancaria'), _('Entrada en libro diario'));
$MenuItems['GL']['Transactions']['URL'] = array('/Payments.php?NewPayment=Yes', '/CustomerReceipt.php?NewReceipt=Yes&amp;Type=GL', '/ImportBankTrans.php', '/BankMatching.php?Type=Payments', '/BankMatching.php?Type=Receipts', '/GLJournal.php?NewJournal=Yes');

$MenuItems['GL']['Reports']['Caption'] = array(_('Saldos de cuentas bancarias'), _('Estado de conciliacion bancaria'), _('Lista de pago con cheque'), _('Transacciones diarias del banco'), _('Consultar cuenta'), _('Graph of Account Transactions'), _('Lista de cuentas'), _('Lista de cuentas a archivo CSV'), _('Consultar libro diario'), _('Balance de comprobacion'), _('Balance General'), _('Estado de Ganancia y Perdidas'), _('Estado de flujo efectivo'), _('Estados financieros'), _('Analisis horizontal del estado de situacion'), _('Analisis horizontal del estado de resultados'), _('Informes de Centros de Costo'), _('Informe de impuestos'));
$MenuItems['GL']['Reports']['URL'] = array('/BankAccountBalances.php', '/BankReconciliation.php', '/PDFChequeListing.php', '/DailyBankTransactions.php', '/SelectGLAccount.php', '/GLAccountGraph.php', '/GLAccountReport.php', '/GLAccountCSV.php', '/GLJournalInquiry.php', '/GLTrialBalance.php', '/GLBalanceSheet.php', '/GLProfit_Loss.php', '/GLCashFlowsIndirect.php', '/GLStatements.php', '/AnalysisHorizontalPosition.php', '/AnalysisHorizontalIncome.php', '/GLTagProfit_Loss.php', '/Tax.php');

$MenuItems['GL']['Maintenance']['Caption'] = array(_('Secciones contables'), _('Grupos contables'), _('Cuentas Contables'), _('Usuarios autorizados por cuenta contable'), _('Cuentas contables autorizadas por usuario'), _('Presupuesto contable'), _('Centro de Costos'), _('Cuentas bancarias'), _('Usuarios autorizados por cuenta bancaria'), _('Cuentas bancarias autorizadas por usuario'), _('Maintain Journal Templates'));
$MenuItems['GL']['Maintenance']['URL'] = array('/AccountSections.php', '/AccountGroups.php', '/GLAccounts.php', '/GLAccountUsers.php', '/UserGLAccounts.php', '/GLBudgets.php', '/GLTags.php', '/BankAccounts.php', '/BankAccountUsers.php', '/UserBankAccounts.php', '/GLJournalTemplates.php');

$MenuItems['FA']['Transactions']['Caption'] = array(_('Agregar un activo nuevo'), _('Seleccionar un activo'), _('Cambio Ubicacion de activos'), _('Diario de Amortizacion'));
$MenuItems['FA']['Transactions']['URL'] = array('/FixedAssetItems.php', '/SelectAsset.php', '/FixedAssetTransfer.php', '/FixedAssetDepreciation.php');

$MenuItems['FA']['Reports']['Caption'] = array(_('Registro de activos'), _('Mi plan de mantenimiento'), _('Email para recordatorio de mantenimiento'));
$MenuItems['FA']['Reports']['URL'] = array('/FixedAssetRegister.php', '/MaintenanceUserSchedule.php', '/MaintenanceReminders.php');

$MenuItems['FA']['Maintenance']['Caption'] = array(_('Administrar categorias de activoss fijos'), _('Agregar o Administrar Ubicaciones de activos'), _('Tarea de mantenimiento de activos fijos'));
$MenuItems['FA']['Maintenance']['URL'] = array('/FixedAssetCategories.php', '/FixedAssetLocations.php', '/MaintenanceTasks.php');

$MenuItems['PC']['Transactions']['Caption'] = array(_('Asignacion de Efectivo a la Ficha de la Caja Chica'), _('Transfer Assigned Cash Between PC Tabs'), _('Gastos de Solicitud de Ficha de la Caja Chica'), _('Autorizar gastos'), _('Autorizar efectivo asignado'));
$MenuItems['PC']['Transactions']['URL'] = array('/PcAssignCashToTab.php', '/PcAssignCashTabToTab.php', '/PcClaimExpensesFromTab.php', '/PcAuthorizeExpenses.php', '/PcAuthorizeCash.php');

$MenuItems['PC']['Reports']['Caption'] = array(_('Informe General de la Ficha de la Caja Chica'), _('PC Expense General Report'), _('PC Tab Expenses List'), _('Analisis de gastos de caja chica'));
$MenuItems['PC']['Reports']['URL'] = array('/PcReportTab.php', '/PcReportExpense.php', '/PcTabExpensesList.php', '/PcAnalysis.php');

$MenuItems['PC']['Maintenance']['Caption'] = array(_('Tipos de Fichas de la Caja Chica'), _('Fichas de la Caja Chica'), _('Gastos de caja chica'), _('Gastos por Tipo de Ficha de la Caja Chica'));
$MenuItems['PC']['Maintenance']['URL'] = array('/PcTypeTabs.php', '/PcTabs.php', '/PcExpenses.php', '/PcExpensesTypeTab.php');

$MenuItems['system']['Transactions']['Caption'] = array(_('Configuracion de la Empresa'), _('Parametros del sistema'), _('Administrar usuarios'), _('Administrar fichas de seguridad'), _('Administrar permisos de acceso'), _('Configuracion de Pagina de Seguridad'), _('Administrar monedas'), _('Administrar autoridades fiscales y tasas'), _('Administrar grupos de impuestos'), _('Administrar jurisdicciones fiscales'), _('Administrar clases de impuestos'), _('Lista de periodos definidos'), _('Generador de Informes'), _('Ver Auditor'), _('Administrar Codigos Geograficos'), _('Creacion de formularios'), _('Configuracion de tienda Web'), _('Detalles del servidor SMTP'), _('Administrar grupos de correo'));
$MenuItems['system']['Transactions']['URL'] = array('/CompanyPreferences.php', '/SystemParameters.php', '/WWW_Users.php', '/SecurityTokens.php', '/WWW_Access.php', '/PageSecurity.php', '/Currencies.php', '/TaxAuthorities.php', '/TaxGroups.php', '/TaxProvinces.php', '/TaxCategories.php', '/PeriodsInquiry.php', '/reportwriter/admin/ReportCreator.php', '/AuditTrail.php', '/GeocodeSetup.php', '/FormDesigner.php', '/ShopParameters.php', '/SMTPServer.php', '/MailingGroupMaintenance.php');

$MenuItems['system']['Reports']['Caption'] = array(_('Tipos de Venta (Lista de Precios)'), _('Tipos de cliente'), _('Tipos de proveedor'), _('Estado de credito'), _('Condiciones de pago'), _('Definir niveles de autorizacion de ordenes de compra'), _('Forma de pago'), _('Vendedores'), _('Zona de ventas'), _('Transportistas'), _('Registros de la Interfaz Contable de Ventas'), _('Registros de la Interfaz Contable de Costo de Bienes Vendidos'), _('Administrar Costo de Flete'), _('Matrizde descuentos'));
$MenuItems['system']['Reports']['URL'] = array('/SalesTypes.php', '/CustomerTypes.php', '/SupplierTypes.php', '/CreditStatus.php', '/PaymentTerms.php', '/PO_AuthorisationLevels.php', '/PaymentMethods.php', '/SalesPeople.php', '/Areas.php', '/Shippers.php', '/SalesGLPostings.php', '/COGSGLPostings.php', '/FreightCosts.php', '/DiscountMatrix.php');

$MenuItems['system']['Maintenance']['Caption'] = array(_('Administar categoria de inventario'), _('Administrar ubicaciones (sedes, almacenes)'), _('Mantenimiento de usuarios autorizados por ubicacion de inventario'), _('Mantemiento de ubicaciones de inventario autorizadas por usuario'), _('Administrar clases de descuento'), _('Unidades de medida'), _('PRM - Dias de Produccion Disponible'), _('PRM - Tipos de Solicitud (exigencia)'), _('Administrar Departamentos Internos'), _('Mantener categorias de inventario interno por funciones de usuario'), _('Mantenimiento de plantillas de etiquetas'));
$MenuItems['system']['Maintenance']['URL'] = array('/StockCategories.php', '/Locations.php', '/LocationUsers.php', '/UserLocations.php', '/DiscountCategories.php', '/UnitsOfMeasure.php', '/MRPCalendar.php', '/MRPDemandTypes.php', '/Departments.php', '/InternalStockCategoriesByRole.php', '/Labels.php');

$MenuItems['Utilities']['Transactions']['Caption'] = array(_('Cambiar un codigo de clientes'), _('Cambiar un codigo de sucursal de cliente'), _('Cambiar un codigo de cuenta contable'), _('Cambiar un codigo de articulo de inventario'), _('Cambiar un codigo de ubicacion'), _('Change A Salesman Code'), _('Cambiar un codigo de categoria de inventario'), _('Cambiar un codigo de proveedor'), _('Traducir descripciones de articulos'), _('Actualizar costos de todos los elementos de lista de materiales, de abajo hacia arriba.'), _('Reaplicar costo al analisis de ventas'), _('Suprimir transacciones de ventas'), _('Revocar todos los pagos a proveedores en una fecha especifica'), _('Actualizar analisis de ventas con ultimos datos de clientes'), _('Copiar derechos de acceso a cuentas contables contables de un usuario a otro'));
$MenuItems['Utilities']['Transactions']['URL'] = array('/Z_ChangeCustomerCode.php', '/Z_ChangeBranchCode.php', '/Z_ChangeGLAccountCode.php', '/Z_ChangeStockCode.php', '/Z_ChangeLocationCode.php', '/Z_ChangeSalesmanCode.php', '/Z_ChangeStockCategory.php', '/Z_ChangeSupplierCode.php', '/AutomaticTranslationDescriptions.php', '/Z_BottomUpCosts.php', '/Z_ReApplyCostToSA.php', '/Z_DeleteSalesTransActions.php', '/Z_ReverseSuppPaymentRun.php', '/Z_UpdateSalesAnalysisWithLatestCustomerData.php', '/Z_GLAccountUsersCopyAuthority.php');

$MenuItems['Utilities']['Reports']['Caption'] = array(_('Saldo de deudores en total por divisa'), _('Saldo de proveedores en total por divisa'), _('Mostrar transacciones generales que no cuadran'), _('Lista de articulos sin foto'));
$MenuItems['Utilities']['Reports']['URL'] = array('/Z_CurrencyDebtorsBalances.php', '/Z_CurrencySuppliersBalances.php', '/Z_CheckGLTransBalance.php', '/Z_ItemsWithoutPicture.php');

$MenuItems['Utilities']['Maintenance']['Caption'] = array(_('Mantener archivos de idioma'), _('Crear nueva compañia'), _('Opciones de exportacion datos'), _('Importar clientes de un archivo CSV'), _('Importar articulos de inventario de un archivo CSV'), _('Importar lista de precios de un archivo CSV'), _('Importar activos fijos de un archivo CSV'), _('Importar recibos de pago del Libro Mayor o diarios de archivos CSV'), _('Crear una nueva plantilla de archivos SQL de empresa y emitirla'), _('Recalcular importes atrasados en contabilidad'), _('Volver a registrar transacciones de un periodo especifico'), _('Purgar todos los precios antiguos'), _('Remove all purchase back orders'));
$MenuItems['Utilities']['Maintenance']['URL'] = array('/Z_poAdmin.php', '/Z_MakeNewCompany.php', '/Z_DataExport.php', '/Z_ImportDebtors.php', '/Z_ImportStocks.php', '/Z_ImportPriceList.php', '/Z_ImportFixedAssets.php', '/Z_ImportGLTransactions.php', '/Z_CreateCompanyTemplateFile.php', '/Z_UpdateChartDetailsBFwd.php', '/Z_RePostGLFromPeriod.php', '/Z_DeleteOldPrices.php', '/Z_RemovePurchaseBackOrders.php');
?>
