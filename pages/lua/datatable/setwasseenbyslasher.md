<function name="SetWasSeenBySlasher" parent="Player" type="classfunc">
	<description>
		Sets whether this Survivor has been spotted by the active Slasher during the round.<br>
		Set automatically whenever a Slasher's chase-detection scan finds this Survivor in view.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="state" type="boolean">The value to set.</arg>
	</args>
</function>