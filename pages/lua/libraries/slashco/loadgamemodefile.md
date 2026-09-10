<function name="LoadGamemodeFile" parent="SlashCo" type="libraryfunc">
	<description>
		Includes a gamemode lua file.<br>
		Currently just a thin wrapper around `include`, kept separate so gamemode files can later be loaded directly from a workshop-mounted addon instead of the local filesystem.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="fileName" type="string">Path of the file to include.</arg>
	</args>
</function>