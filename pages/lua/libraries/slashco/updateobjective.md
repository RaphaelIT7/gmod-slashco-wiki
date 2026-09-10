<function name="UpdateObjective" parent="SlashCo" type="libraryfunc">
	<description>
		Adds the objective `name` to the tracked objectives if it isn't tracked yet, or updates its status/progress otherwise.<br>
		When `status` is `SlashCo.ObjStatus.PROGRESS` and the objective has a count, `count` (default `1`) is added to its progress, capping at the total and auto-completing it once reached.<br>
		Fires <page>SlashCo:OnObjectiveComplete</page> when the objective newly becomes complete.<br>
		Doesn't network the change, call <page>SlashCo.SendObjectives</page> afterwards to update clients.
	</description>
	<realm>Server</realm>
	<group>Objectives</group>
	<args>
		<arg name="name" type="string">Name of the objective, must be a key of `SlashCo.Objectives`.</arg>
		<arg name="status" type="SlashCo.ObjStatus">The new status for the objective.</arg>
		<arg name="count" type="number" optional>Required when first tracking an objective that has a count. When `status` is `PROGRESS`, the amount to add to its progress.</arg>
		<arg name="dontOverrideComplete" type="boolean" optional>If `true`, does nothing when the objective is already `SlashCo.ObjStatus.COMPLETE`.</arg>
	</args>
</function>
