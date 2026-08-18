<function name="DefaultConditionsForced" parent="SlashCo" type="libraryfunc">
	<description>
		Default spawn condition for forced spawn entities.<br>
		Requires the entity to pass <page>SlashCo.DefaultConditions</page><br>
		and have its `Forced` property enabled.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="ent" type="Entity">Spawn entity to check</arg>
	</args>
	<rets>
		<ret name="valid" type="boolean">Whether the entity is a valid forced spawn</ret>
	</rets>
</function>