<function name="SlashCo:OnObjectiveComplete" parent="" type="hook">
	<description>
		Called from <page>SlashCo.UpdateObjective</page> when an objective's status newly changes to `SlashCo.ObjStatus.COMPLETE`.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="name" type="string">Name of the objective that was completed.</arg>
	</args>
</function>
