<function name="Spawn" parent="SlashCo" type="libraryfunc">
	<description>
		Activates a list of spawn points.<br>
		Each entry with a `SpawnEnt` method is spawned.<br>
		An optional callback can be used to modify an entity before it is spawned.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="elements" type="table">Sequential table of spawn entities</arg>
		<arg name="spawnFunc" type="function" default="nil">
			Optional callback called with each spawn entity before `SpawnEnt` is invoked
		</arg>
	</args>
</function>