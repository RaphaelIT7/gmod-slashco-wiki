<function name="DefaultConditions" parent="SlashCo" type="libraryfunc">
	<description>
		Default set of conditions for weighted spawn tables.<br>
		An entity passes if it is valid, is not disabled, and does not already have a spawned entity.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="ent" type="Entity">Spawn entity to check</arg>
	</args>
	<rets>
		<ret name="valid" type="boolean">Whether the entity can be selected</ret>
	</rets>
</function>