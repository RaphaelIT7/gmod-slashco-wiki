<function name="StartChaseMode" parent="SlashCo" type="libraryfunc">
	<description>
		Starts chase mode for the given slasher.<br>
		Unless `forceChase` is used, this looks for a survivor in the slasher's eye trace or view cone within their <page>SLASHER#ChaseRange</page>, and does nothing if none is found or chasing is disabled for them.<br>
		If the slasher is already chasing, this calls <page>SlashCo.StopChase</page> instead.<br>
		On success it sets `InSlasherChaseMode`, switches to <page>SLASHER#ChaseSpeed</page>, plays the chase music, adds the `SlasherChase` fog, and schedules an automatic <page>SlashCo.StopChase</page> after the chase duration.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="slasher" type="Player">The slasher to start chasing with</arg>
		<arg name="forceChase" type="boolean" optional>If `true`, skips the line-of-sight/range checks and starts the chase unconditionally</arg>
	</args>
</function>
